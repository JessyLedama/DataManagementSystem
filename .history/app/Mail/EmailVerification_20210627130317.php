<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailVerification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');    
        return $this->from('registrations@carba.com', 'Mailtrap')
            ->subject('Mailtrap Confirmation')
            ->markdown('mails.exmpl')
            ->with([
                'name' => 'New Mailtrap User',
                'link' => '/inboxes/'
            ]);
    }
}
