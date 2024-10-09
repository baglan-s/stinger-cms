<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Integration\OneCApiService;
use Illuminate\Support\Facades\App;
use Illuminate\Contracts\Foundation\Application;
use App\Services\LogService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        App::bind(OneCApiService::class, function (Application $app) {
            return new OneCApiService(
                config('services.1c.host'),
                config('services.1c.login'),
                config('services.1c.password'),
                $app->make(LogService::class)
            );
        });

        App::bind(OnlinePaymentInterface::class, TipTopPay::class);
        $this->app->singleton(PaymentFactory::class, function() {
            return new PaymentFactory();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
