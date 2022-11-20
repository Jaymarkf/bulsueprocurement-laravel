<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;
    public $username;
    public $reset_code;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username, $reset_code)
    {
        //
        $this -> username = $username;
        $this -> reset_code = $reset_code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.auth-pass-reset')->with([
            'username' => $this->username,
            'reset_code' => $this->reset_code,
        
        ]);
    }
}
