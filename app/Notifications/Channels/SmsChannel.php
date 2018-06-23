<?php
/**
 * Created by PhpStorm.
 * User: wangzaron
 * Date: 2018/6/23
 * Time: 上午10:04
 */

namespace App\Notifications\Channels;

use App\Notifications\SMS\NewClueNotification;
use Illuminate\Notifications\Notification;
use App\Notifications\Messages\SmsMessage;
use Overtrue\EasySms\EasySms;

class SmsChannel
{
    /**
     * The sms client instance.
     *
     * @var
     */
    protected $smsClient;

    /**
     * The phone number notifications should be sent from.
     *
     * @var string
     */
    protected $from;

    /**
     * Create a new Nexmo channel instance.
     *
     * @param    $smsClient
     * @param  string  $from
     * @return void
     */
    public function __construct(EasySms $smsClient, $from = null)
    {
        $this->from = $from;
        $this->smsClient = $smsClient;
    }

    /**
     * Send the given notification.
     *
     * @param  mixed  $notifiable
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return boolean
     * @throws
     */
    public function send($notifiable, Notification $notification)
    {
        if (! $to = $notifiable->routeNotificationFor('Mobile', $notification)) {
            return;
        }

        tap($notification, function (NewClueNotification $newClueNotification) use($to, $notifiable){
            $message = $newClueNotification->toSms($notifiable);
            if (is_array($message)) {
                $message = new SmsMessage($message);
            }
            $this->smsClient->send($to, $message);
        });

        return true;
    }
}