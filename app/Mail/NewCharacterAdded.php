<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewCharacterAdded extends Mailable
{
    use Queueable, SerializesModels;

    public $character = '';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($character)
    {
        $this->character = $character;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email');
    }
}
