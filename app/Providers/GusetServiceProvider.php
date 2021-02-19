<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GusetServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('guestService', 'App\Services\GuestLogic');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
