<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct(public $data){}

    public function build()
    {
        return $this->subject('New Contact Message')
            ->view('email', ['data' => $this->data]);
    }
}
