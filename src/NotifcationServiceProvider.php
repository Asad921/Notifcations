<?php

namespace Notifacations;

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
        $this->app->make('Notifcations\Notifcation');
        $this->app->bind('Notifcation',function() {
            return new \Notifcations\Facades\Notify;
         });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        dd('notifcation Arrived');
        // $this->loadMigrationsFrom(__DIR__.'/Database');
    }
}
