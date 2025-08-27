<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use App\Models\User;


class ThankyouMail extends Mailable
{
    use Queueable, SerializesModels;
     public $body;

    /**
     * Create a new message instance.
     */
    public function __construct($body)
    {
        $this->body = $body;
    }
    

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
         return new Envelope(
            subject: 'Thank You',
            from: new Address('noreply@digitalasset.leveragemillionaireclub.com', 'Digital Asset'),
             bcc: [
                new Address('noreply@digitalasset.leveragemillionaireclub.com'),
            ],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
           view: 'emails.thank_you',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
