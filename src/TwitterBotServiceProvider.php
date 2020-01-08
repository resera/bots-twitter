<?php

namespace Resera\TwitterBot;

use Illuminate\Support\ServiceProvider;

class TwitterBotServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {


    }
}