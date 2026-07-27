<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Complaint;
use App\Models\Banner;
use App\Models\Service;
use App\Models\Project;
use App\Models\Post;
use App\Models\Setting;
use App\Mail\ContactReceivedMail;
use App\Mail\ContactConfirmationMail;
use App\Mail\ComplaintReceivedMail;
use App\Mail\ComplaintConfirmationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function index()
    {
        $banners = Banner::where('is_active', true)->orderBy('order')->get();
        $services = Service::where('is_active', true)->orderBy('order')->take(4)->get();
        $featuredProjects = Project::where('is_active', true)->where('is_featured', true)->orderBy('order')->take(6)->get();

        return view('welcome', compact('banners', 'services', 'featuredProjects'));
    }

    public function about()
    {
        $team = \App\Models\TeamMember::where('is_active', true)->orderBy('order')->get();
        $partners = \App\Models\Partner::where('is_active', true)->orderBy('order')->get();
        return view('frontend.about', compact('team', 'partners'));
    }

    public function services()
    {
        $services = Service::where('is_active', true)->orderBy('order')->get();
        return view('frontend.services', compact('services'));
    }

    public function projects()
    {
        $projects = Project::where('is_active', true)->orderBy('order')->get();
        return view('frontend.projects', compact('projects'));
    }

    public function blog()
    {
        $posts = Post::where('is_published', true)
            ->where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->paginate(6);

        return view('frontend.blog', compact('posts'));
    }

    public function blogPost($slug)
    {
        $post = Post::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        // Get 3 recent posts for sidebar/recommendations
        $recentPosts = Post::where('is_published', true)
            ->where('id', '!=', $post->id)
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        return view('frontend.blog_post', compact('post', 'recentPosts'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function submitContact(Request $request)
    {
        // Security Check: Honeypot field
        if ($request->filled('website_hp')) {
            Log::warning('Honeypot filled by contact submission bot.');
            return redirect()->back()->with('success', 'Mensaje enviado correctamente.');
        }

        // Validation
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:30',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // Security: HTML Sanitization
        $validated['full_name'] = strip_tags($validated['full_name']);
        $validated['subject'] = strip_tags($validated['subject']);
        $validated['message'] = htmlspecialchars(strip_tags($validated['message']), ENT_QUOTES, 'UTF-8');

        // Store
        $contact = Contact::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'is_read' => false,
        ]);

        // Email dispatch
        try {
            $setting = Setting::first();
            $receiver = $setting->contact_email_receiver ?? $setting->email ?? 'contacto@njconstructec.com';

            if (filled($receiver)) {
                Mail::to($receiver)->send(new ContactReceivedMail($contact));
            }
            Mail::to($contact->email)->send(new ContactConfirmationMail($contact, $setting ?? new Setting()));
        } catch (\Throwable $e) {
            Log::error('Error al enviar correo de contacto: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', '¡Gracias por contactarnos! Tu mensaje ha sido recibido con éxito y nos pondremos en contacto contigo a la brevedad.');
    }

    public function complaints()
    {
        $year = date('Y');
        $nextNumber = 1;
        try {
            $lastComplaint = Complaint::whereYear('created_at', $year)->latest('id')->first();
            if ($lastComplaint) {
                $lastSeq = (int) substr($lastComplaint->claim_number, -5);
                $nextNumber = $lastSeq + 1;
            }
        } catch (\Throwable $e) {
            // Ignore during setup
        }
        
        $claimNumber = sprintf('REC-%d-%05d', $year, $nextNumber);

        return view('frontend.complaints', compact('claimNumber'));
    }

    public function submitComplaint(Request $request)
    {
        // Security Check: Honeypot field
        if ($request->filled('website_hp')) {
            Log::warning('Honeypot filled by complaint submission bot.');
            return redirect()->back()->with('success', 'Reclamación recibida.');
        }

        // Validation
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'document_type' => 'required|string|in:DNI,CE,RUC,Pasaporte',
            'document_number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:30',
            'address' => 'required|string|max:255',
            'department' => 'nullable|string|max:100',
            'province' => 'nullable|string|max:100',
            'district' => 'nullable|string|max:100',
            'client_type' => 'required|string|in:Titular,Representante',
            'claim_type' => 'required|string|in:Reclamo,Queja',
            'good_type' => 'required|string|in:Producto,Servicio',
            'good_description' => 'required|string|max:1000',
            'claimed_amount' => 'nullable|numeric|min:0',
            'incident_description' => 'required|string|max:5000',
            'request' => 'required|string|max:5000',
        ]);

        // Security: HTML Sanitization
        foreach ($validated as $key => $value) {
            if (is_string($value)) {
                $validated[$key] = strip_tags($value);
            }
        }
        $validated['incident_description'] = htmlspecialchars($validated['incident_description'], ENT_QUOTES, 'UTF-8');
        $validated['request'] = htmlspecialchars($validated['request'], ENT_QUOTES, 'UTF-8');

        // Safe sequence generation in a database transaction
        $claimNumber = DB::transaction(function () {
            $year = date('Y');
            $lastComplaint = Complaint::whereYear('created_at', $year)
                ->lockForUpdate()
                ->latest('id')
                ->first();
            
            $nextNumber = 1;
            if ($lastComplaint) {
                $lastSeq = (int) substr($lastComplaint->claim_number, -5);
                $nextNumber = $lastSeq + 1;
            }
            
            return sprintf('REC-%d-%05d', $year, $nextNumber);
        });

        // Store
        $complaint = Complaint::create([
            'claim_number' => $claimNumber,
            'full_name' => $validated['full_name'],
            'document_type' => $validated['document_type'],
            'document_number' => $validated['document_number'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'address' => $validated['address'],
            'department' => $validated['department'],
            'province' => $validated['province'],
            'district' => $validated['district'],
            'client_type' => $validated['client_type'],
            'claim_type' => $validated['claim_type'],
            'good_type' => $validated['good_type'],
            'good_description' => $validated['good_description'],
            'claimed_amount' => $validated['claimed_amount'] ?: null,
            'incident_description' => $validated['incident_description'],
            'request' => $validated['request'],
            'status' => 'Pendiente',
        ]);

        // Email dispatch
        try {
            $setting = Setting::first();
            $receiver = $setting->contact_email_receiver ?? $setting->email ?? 'contacto@njconstructec.com';

            if (filled($receiver)) {
                Mail::to($receiver)->send(new ComplaintReceivedMail($complaint));
            }
            Mail::to($complaint->email)->send(new ComplaintConfirmationMail($complaint, $setting ?? new Setting()));
        } catch (\Throwable $e) {
            Log::error('Error al enviar copia de libro de reclamaciones: ' . $e->getMessage());
        }

        return redirect()->back()->with('success_claim', "Su reclamación ha sido registrada exitosamente. Código de registro: {$claimNumber}");
    }
}
