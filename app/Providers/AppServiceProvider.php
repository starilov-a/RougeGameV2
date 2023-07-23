<?php

namespace App\Providers;

use App\Services\Telegram;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('App\Models\Telegram\Telegram', function($app){
            return new Telegram(new Http(), config('bot.apikey'));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
