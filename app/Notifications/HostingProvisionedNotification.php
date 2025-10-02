<?php

namespace App\Notifications;

use App\Models\HostingService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class HostingProvisionedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(
        public HostingService $hostingService
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
        $domain = $this->hostingService->domain;
        $siteUrl = 'https://' . $domain;
        $dashboardUrl = url('/admin');

        $message = (new MailMessage)
            ->subject('Your Laravel Hosting is Ready! 🎉')
            ->greeting('Great news!')
            ->line('Your hosting environment for **' . $domain . '** has been successfully provisioned and is now live!')
            ->line('')
            ->line('## 🚀 Your Site Details')
            ->line('**Domain:** ' . $domain)
            ->line('**Server IP:** ' . $this->hostingService->server_ip)
            ->line('')
            ->action('Visit Your Site', $siteUrl);

        // Add database credentials if available
        if ($this->hostingService->database_name) {
            $message->line('')
                ->line('## 🗄️ Database Credentials')
                ->line('**Database Name:** ' . $this->hostingService->database_name)
                ->line('**Database User:** ' . $this->hostingService->database_user)
                ->line('**Database Password:** ' . $this->hostingService->database_password)
                ->line('**Host:** 127.0.0.1')
                ->line('**Port:** 3306');
        }

        $message->line('')
            ->line('## 📋 Next Steps')
            ->line('1. Visit your site at ' . $siteUrl)
            ->line('2. Check your deployment status')
            ->line('3. Configure your Laravel application')
            ->line('4. Set up your environment variables (if needed)')
            ->line('')
            ->line('You can manage all aspects of your hosting through your dashboard:')
            ->action('Manage Hosting', $dashboardUrl)
            ->line('')
            ->line('## 🔒 SSL Certificate')
            ->line('Your SSL certificate has been automatically configured. Your site is secured with HTTPS!')
            ->line('')
            ->line('If you have any questions or need assistance, don\'t hesitate to reach out.')
            ->salutation('Happy coding! Shane Barron - sbarron.com');

        return $message;
    }

    /**
     * Get the array representation of the notification.
     */
    public function toArray(object $notifiable): array
    {
        return [
            'hosting_service_id' => $this->hostingService->id,
            'domain' => $this->hostingService->domain,
            'status' => 'provisioned',
        ];
    }
}
