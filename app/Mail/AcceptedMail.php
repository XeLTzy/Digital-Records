<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AcceptedMail extends Mailable
{


    use Queueable, SerializesModels;

    public $firstname;
    public $middlename;
    public $lastname;
    public $suffix;
    public $date;
    public $start_time;

    /**
     * Create a new message instance.
     */
    public function __construct($firstname, $middlename, $lastname, $suffix, $date, $start_time)
    {
        $this->firstname = $firstname;
        $this->middlename = $middlename;
        $this->lastname = $lastname;
        $this->suffix = $suffix;
        $this->date = \Carbon\Carbon::parse($date)->format('F j, Y');
        $this->start_time = $start_time;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Booking Accepted',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.accepted',
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
