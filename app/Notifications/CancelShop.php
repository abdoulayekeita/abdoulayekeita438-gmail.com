<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class CancelShop extends Notification
{
    use Queueable;

    protected $motif;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($motif)
    {
        $this->motif = $motif;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line($this->motif)
            ->action('Notification Action', url('/'))
            ->line("Merci d'utliser notre nos services");
    }
}
