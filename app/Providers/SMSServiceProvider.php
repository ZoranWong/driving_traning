<?php

namespace App\Providers;

use App\Notifications\Channels\SmsChannel;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Notifications\ChannelManager;
use Illuminate\Support\ServiceProvider;
use Overtrue\EasySms\EasySms;

class SMSServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->app->make(ChannelManager::class)->extend(SmsChannel::class, function () {
            return new SmsChannel($this->app->make(EasySms::class));
        });

        $this->app->make(ChannelManager::class)->extend('sms', function () {
            return $this->app->make(ChannelManager::class)->driver(SmsChannel::class);
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(EasySms::class, function (Application $app) {
            return $app->make(EasySms::class, config('sms'));
        });

        $this->app->alias('sms_sender',EasySms::class);
    }
}
