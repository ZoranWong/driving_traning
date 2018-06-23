<?php

namespace App\Notifications\SMS;

use App\Entities\DrivingClue;
use App\Notifications\Channels\SmsChannel;
use App\Notifications\Messages\SmsMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewClueNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [SmsChannel::class];
    }


    public function toSms($notifiable)
    {
        $message = new SmsMessage();
        tap($notifiable, function (DrivingClue $clue) use($message){
            $channel = $clue->channel->name;
            $message->setTemplate(config('sms.new_clue_template.id'));
            $data = [
                'channel' => $channel,
                'name'    => $clue->customerName,
                'phoneNo' => $clue->customerMobile
            ];
            $message->setData($data);
            $message->setContent(sprintf(config('sms.new_clue_template.content')), extract($data));
        });
        return $message;
    }
}
