<?php

namespace App\Mail;

use App\Models\Complaint;
use App\Models\Setting;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ComplaintConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $complaint;
    public $setting;

    /**
     * Create a new message instance.
     */
    public function __construct(Complaint $complaint, Setting $setting)
    {
        $this->complaint = $complaint;
        $this->setting = $setting;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Copia de Hoja de Reclamación - ' . $this->complaint->claim_number,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.complaint_confirmation',
        );
    }
}
