<?php

namespace Azkia\AdminUI;

use Illuminate\Support\ServiceProvider;

class AdminUIServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       
        // $this->loadRoutesFrom(__DIR__.'/routes.php');
        // $this->loadMigrationsFrom(__DIR__.'/migrations');
        // $this->loadViewsFrom(__DIR__.'/views', 'todolist');
        $this->publishes([
            __DIR__.'/assets' => base_path('public/admin/'),
            __DIR__.'/views' => base_path('resources/views/'),
        ]);
        
        

    }
}
