<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ConfirmPosts extends Notification
{
    // use Queueable;

    // /**
    //  * Create a new notification instance.
    //  *
    //  * @return void
    //  */
    // private $name;

    // public function __construct($name)
    // {
    //     $this->name=$name;
    // }

    // /**
    //  * Get the notification's delivery channels.
    //  *
    //  * @param  mixed  $notifiable
    //  * @return array
    //  */
    // public function via($notifiable)
    // {
    //     return ['database','broadcast'];
    // }

    // /**
    //  * Get the mail representation of the notification.
    //  *
    //  * @param  mixed  $notifiable
    //  * @return \Illuminate\Notifications\Messages\MailMessage
    //  */
    // public function toMail($notifiable)
    // {
    //     return (new MailMessage)
    //                 ->line('The introduction to the notification.')
    //                 ->action('Notification Action', url('/'))
    //                 ->line('Thank you for using our application!');
    // }
    // public function toDatabase($notifiable)
    // {
    //     return [
    //         'data' => 'Xóa Thành Công: "'.$this->name.'"',
    //     ];
    // }


    // public function toBroadcast($notifiable)
    // {
    //     return new BroadcastMessage([
    //         'invoice_id' => $this->invoice->id,
    //         'amount' => $this->invoice->amount,
    //     ]);
    // }

    // /**
    //  * Get the array representation of the notification.
    //  *
    //  * @param  mixed  $notifiable
    //  * @return array
    //  */
    // public function toArray($notifiable)
    // {
    //     return [
    //         //
    //     ];
    // }

    
}
