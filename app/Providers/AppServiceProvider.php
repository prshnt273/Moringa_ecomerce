<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if (app()->environment('production')) {
            URL::forceScheme('https');
        }

        try {
            if (Schema::hasTable('settings')) {
                View::share('setting', Setting::first());
            }
        } catch (\Throwable $e) {
            // Database not available yet (e.g. during build/composer install).
            // Safe to skip; this only affects sharing the settings view variable.
        }
    }
}
