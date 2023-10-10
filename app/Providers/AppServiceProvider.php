<?php

namespace App\Providers;

use App\Contracts\Telegram\ResponseRenderContract;
use App\Contracts\Telegram\SenderContract;
use App\Services\ResponseRenderService;
use App\Services\SenderService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       $this->app->bind(SenderContract::class, SenderService::class);
       $this->app->bind(ResponseRenderContract::class, ResponseRenderService::class);
    }
}
