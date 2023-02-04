<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeEmailHogMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'Welcome Email Hog',
        );
    }

    public function content()
    {
        return new Content(
            markdown: 'emails.welcome-email-hog',
        );
    }

    public function attachments()
    {
        return [];
    }
}
