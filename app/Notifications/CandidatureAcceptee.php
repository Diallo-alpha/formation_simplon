<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CandidatureAcceptee extends Notification
{
    use Queueable;

    public function __construct()
    {
        //
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('Votre candidature a été acceptée')
                    ->line('Félicitations, votre candidature a été acceptée.')
                    ->action('Voir Candidature', url('/candidatures/' . $notifiable->id))
                    ->line('Merci de votre confiance!');
    }

    public function toArray(object $notifiable): array
    {
        return [
            'message' => 'Votre candidature a été acceptée.',
        ];
    }
}
