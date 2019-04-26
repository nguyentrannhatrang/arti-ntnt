<?php

namespace Ntnt\Commands;

use Illuminate\Support\ServiceProvider;

class ArtisanNtntServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.ntnt.arti-ntnt', function($app) {
            return $app['Ntnt\Commands\NtntCommand'];
        });

        $this->commands('command.ntnt.arti-ntnt');
    }
}