<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscribeEmailMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $contact_email;

    /**
     * Create a new message instance.
     * 
     * @param  array  $data
     *
     * @return void
     */
    public function __construct(Array $data)
    {
        $this->contact_email = $data['email'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject(env('APP_NAME').' - '.__('content.email.subscribe.subject'))->view('emails.subscribe');
    }
}
