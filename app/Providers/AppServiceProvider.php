<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public const HOME= '/redirect-by-role';
    /**
     * Register any application services.
     */


    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
