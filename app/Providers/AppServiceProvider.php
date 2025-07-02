<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;

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
        // Force HTTPS for ngrok URLs
        if (str_contains(config('app.url'), 'ngrok')) {
            URL::forceScheme('https');
        }
        // Remove locale setting from here - it should be handled in middleware
        Schema::defaultStringLength(191);
    }
}
