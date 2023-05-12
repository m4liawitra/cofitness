<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactEmailMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $contact_name;
    public $contact_email;
    public $contact_message;

    /**
     * Create a new message instance.
     * 
     * @param  array  $data
     *
     * @return void
     */
    public function __construct(Array $data)
    {
        $this->contact_name     = $data['name'];
        $this->contact_email    = $data['email'];
        $this->contact_message  = $data['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject(env('APP_NAME').' - '.__('content.email.contact.subject'))->view('emails.contact');
    }
}
