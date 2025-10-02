<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WelcomeNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(
        public string $temporaryPassword
    ) {
    }

    /**
     * Get the notification's delivery channels.
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $dashboardUrl = url('/admin');

        return (new MailMessage)
            ->subject('Welcome to sbarron.com Hosting!')
            ->greeting('Welcome to sbarron.com! 🚀')
            ->line('Thank you for choosing sbarron.com for your Laravel hosting needs.')
            ->line('Your account has been created successfully. Here are your login credentials:')
            ->line('')
            ->line('**Email:** ' . $notifiable->email)
            ->line('**Temporary Password:** ' . $this->temporaryPassword)
            ->line('')
            ->action('Access Your Dashboard', $dashboardUrl)
            ->line('Once logged in, you can:')
            ->line('• Configure your domain and GitHub repository')
            ->line('• Provision your hosting environment')
            ->line('• Manage DNS settings')
            ->line('• View server credentials')
            ->line('')
            ->line('**Important:** Please change your password after your first login for security.')
            ->line('')
            ->line('If you have any questions, feel free to reach out to me directly.')
            ->salutation('Best regards, Shane Barron - sbarron.com');
    }

    /**
     * Get the array representation of the notification.
     */
    public function toArray(object $notifiable): array
    {
        return [
            'message' => 'Welcome to sbarron.com!',
        ];
    }
}
