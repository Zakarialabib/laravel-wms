<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewUser extends Notification
{
    use Queueable;

    private $new_user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $new_user)
    {
        $this->new_user = $new_user;
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
            ->line('New user has registered with email ' . $this->new_user->email)
            ->action('Approve user', route('users.approve', $this->new_user->id));
    }

}
