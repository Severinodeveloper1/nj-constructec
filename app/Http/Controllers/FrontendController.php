<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class FrontendController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function projects()
    {
        return view('frontend.projects');
    }

    public function blog()
    {
        return view('frontend.blog');
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
        Contact::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'is_read' => false,
        ]);

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
        Complaint::create([
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

        return redirect()->back()->with('success_claim', "Su reclamación ha sido registrada exitosamente. Código de registro: {$claimNumber}");
    }
}
