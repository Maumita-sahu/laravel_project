<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $name,$username,$pasword;

    /**
     * Create a new message instance.
     */
    public function __construct($name,$username,$pasword)
    {
        //
        $this->name=$name;
        $this->username=$username;
        $this->pasword=$pasword;
    }

    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Welcome Mail',
    //     );
    // }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    // public function attachments(): array
    // {
    //     return [];
    // }

    public function build(){
        $subject="Registration|Photo Gallery";
        $data=[
            'name'=>$this->name,
            'username'=>$this->username,
            'pasword'=>$this->pasword
        ];
        return $this->subject($subject)->view('Mail.registrationMail')->with($data);
    }
}
