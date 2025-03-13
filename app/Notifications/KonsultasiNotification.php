<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\Konsultasi;

class KonsultasiNotification extends Notification
{
    use Queueable;

    public function __construct(public Konsultasi $konsultasi)
    {
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->greeting('Halo!')
                    ->line('Konsultasi baru telah dimulai.')
                    ->action('Lihat Konsultasi', url('/konsultasi/' . $this->konsultasi->id))
                    ->line('Terima kasih telah menggunakan layanan kami!');
    }
}
