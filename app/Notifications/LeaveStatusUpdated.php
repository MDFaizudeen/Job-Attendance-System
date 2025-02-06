<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class LeaveStatusUpdated extends Notification
{
    public $employeeName;
    public $leaveStatus;

    public function __construct($employeeName, $leaveStatus)
    {
        $this->employeeName = $employeeName;
        $this->leaveStatus = $leaveStatus;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line("Hello {$this->employeeName},")
                    ->line("Your leave request has been {$this->leaveStatus}.")
                    ->action('View Leave Status', url('/leaves'))
                    ->line('Thank you for using our application!');
    }
}
