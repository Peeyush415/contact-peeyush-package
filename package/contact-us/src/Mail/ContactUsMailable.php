<?php

namespace Peeyush\ContactUs\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactUsMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $query;
    public $name;

    /**
     * Create a new message instance.
     */
    public function __construct($query,$name)
    {
        $this->query=$query;
        $this->name=$name;
        // dd($this->query);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Us Mailable',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'contact-us::contact-us.email',
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

    // public function build()
    // {
    //     return $this->markdown('contact-us::contact-us.email')
    //                 ->with([
    //                     'query' => $this->query,
    //                     'name' => $this->name,
    //                 ]);
    // }
}
