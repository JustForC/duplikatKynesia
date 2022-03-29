<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserRegister extends Notification
{
    use Queueable;
    private $insideMail;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($insideMail)
    {
        $this->insideMail = $insideMail;
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

        if($notifiable->role == 0){
            return (new MailMessage)
                        ->line($this->insideMail['lineOne'])
                        ->line($this->insideMail['lineTwo'])
                        ->line($this->insideMail['lineThree']);
        }
        elseif($notifiable->role == 1)
        {
            return (new MailMessage)
                        ->line($this->insideMail['line']);
        }
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
