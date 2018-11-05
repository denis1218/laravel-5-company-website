<?php

namespace App\Mail;

use App\User;
use Couchbase\TermSearchQuery;
use GuzzleHttp\Psr7\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $content;
    public $username;
    public $lastname;
    /**
     * Create a new message instance.
     *
     * @param Request $request
     */
    public function __construct($title,$content)
    {
        $this->title = $title;
        $this->content = $content;
        $this->username = Auth()->user()->firstname;
        $this->lastname = Auth()->user()->lastname;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.mail')->subject('Clinic Denta Software Problem')->with([
            'title' => $this->title,
            'content' => $this->content,
            'username' => $this->username,
            'lastname' => $this->lastname
        ]);
    }
}
