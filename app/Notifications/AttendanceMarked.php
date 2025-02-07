<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class AttendanceMarked extends Notification
{
    public $employeeName;
    public $status;

    public function __construct($employeeName, $status)
    {
        $this->employeeName = $employeeName;
        $this->status = $status;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line("Hello {$this->employeeName},")
            ->line("Your attendance has been marked as {$this->status}.")
            ->action('View Attendance', url('/attendances'))
            ->line('Thank you for using our application!');
    }
    public function markAttendance($employeeId, $status)
    {
        $employee = User::find($employeeId);
        $employee->notify(new AttendanceMarked($employee->name, $status));

        return response()->json(['message' => 'Attendance marked']);
    }
}
