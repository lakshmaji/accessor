<?php

namespace Lakshmajim\Accessor;

use Illuminate\Support\ServiceProvider;

class AccessorServiceProvider extends ServiceProvider
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
        $this->app['accessor'] = $this->app->share(function ($app) {
            return new Accessor;
        });
    }
}
