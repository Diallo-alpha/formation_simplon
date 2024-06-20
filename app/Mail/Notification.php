<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Candidature;

class Notification extends Mailable
{
    use Queueable, SerializesModels;

    public $candidature;
    public $status;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Candidature $candidature, $status)
    {
        $this->candidature = $candidature;
        $this->status = $status;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->status === 'accept') {
            return $this->view('emails.acceptation')
                        ->with([
                            'candidature' => $this->candidature,
                        ]);
        } else {
            return $this->view('emails.rejet')
                        ->with([
                            'candidature' => $this->candidature,
                        ]);
        }
    }
}
