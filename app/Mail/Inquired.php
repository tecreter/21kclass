<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Inquired extends Mailable
{
    use Queueable, SerializesModels;

    public $inquiry;

    public function __construct($inquiry)
    {
        $this->from($inquiry->email, $inquiry->name);
        $this->subject("[21kclass.com - Inquiry] " . $inquiry->title);
        $this->inquiry = $inquiry;
    }

    public function build()
    {
        return $this->markdown('front.emails.inquiry');
    }
}
