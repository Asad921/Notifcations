<?php

namespace Notifacation;

use Illuminate\Support\ServiceProvider;

class NotifcationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {    
        $this->app->make('Notifcation\Notifcation');
        $this->app->bind('Notifcation',function() {
            return new \Notifcation\Facades\Notify;
         });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        dd('notify Arrived');
        $this->loadMigrationsFrom(__DIR__.'/Database');
    }
}
