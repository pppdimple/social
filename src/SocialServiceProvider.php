<?php

namespace Mentorshiprocket\Social;

use Illuminate\Support\ServiceProvider;

class SocialServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->loadViewsFrom(__DIR__ . '/../../views', 'flash');
         
        $api = $this->app->make('Mentorshiprocket\Social\SocialController');
    }
}
