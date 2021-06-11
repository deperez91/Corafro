<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageReceived extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    

    /**
     * Build the message.
     *
     * @return $this
     */
    public $msg;

    public function __construct($message)
    {
        $this->msg = $message;
    }

    public function build()
    {
        return $this->view('emails.emergency_call');
    }
}
