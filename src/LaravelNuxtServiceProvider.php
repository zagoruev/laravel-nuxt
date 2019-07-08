<?php

namespace Zagoruev\LaravelNuxt;

use Illuminate\Support\ServiceProvider;

class LaravelNuxtServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/nuxt.php' => $this->app->make('path.config').DIRECTORY_SEPARATOR.'nuxt.php',
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/nuxt.php', 'nuxt');
    }
}
