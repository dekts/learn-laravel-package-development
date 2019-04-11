<?php

namespace Vcian\EBusinessCard;

use Illuminate\Support\ServiceProvider;

class EBusinessCardServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function register()
    {
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/vcian/ebusinesscard'),
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'EBusinessCard');
    }
}
