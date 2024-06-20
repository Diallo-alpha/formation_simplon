<?php

namespace App\Mail;

use App\Models\Candidature;
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
    public function __construct(Candidature $candidature)
    {
        $this->candidature = $candidature;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->from('noreply@example.com')
                    ->subject('Votre candidature a été acceptée')
                    ->markdown('emails.candidature_notification', [
                        'candidature' => $this->candidature,
                    ]);
    }
}
