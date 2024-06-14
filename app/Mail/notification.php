<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Notification extends Mailable
{
    use Queueable, SerializesModels;

    public $candidature;

    /**
     * Create a new message instance.
     */
    public function __construct(User $candidature)
    {
        $this->candidature = $candidature;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->from('ndeyecisse188@gmail.com')
                    ->subject('Votre candidature a été acceptée')
                    ->view('emails.candidature_notification')
                    ->with([
                        'candidature' => $this->candidature,
                    ]);
    }
}
