<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AdminCorporateEnquiryNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    protected $corporateEnquiry;
    public function __construct($corporateEnquiry)
    {
        $this->corporateEnquiry=$corporateEnquiry;
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
                    ->subject('Corporate Enquiry Request')
                    ->greeting('Hi, you got a new corporate enquiry request')
                    ->line('Company Name: '.$this->corporateEnquiry->company_name)
                    ->line('Contact Person: '.$this->corporateEnquiry->contact_person)
                    ->line('Email Address: '.$this->corporateEnquiry->email_address)
                    ->line('Phone Number: '.$this->corporateEnquiry->phone)
                    ->line('Number Of Employees: '.$this->corporateEnquiry->total_employees)
                    ->line('Meal Subscription: '.$this->corporateEnquiry->meal_subscription)
                    ->line('Special Request: '.$this->corporateEnquiry->special_request);
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
