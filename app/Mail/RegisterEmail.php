<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $add;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($add)
    {
        $this->add = $add;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Sachvui.vn')->view('emails.RegisterMail');
    }
}
