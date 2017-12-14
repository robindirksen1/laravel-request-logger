<?php

namespace RobinDirksen1\LaravelRequestLogger;

use Illuminate\Support\ServiceProvider;

class RequestLoggerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(RequestLogger::class, function () {
            return new RequestLogger();
        });
        $this->app->alias(RequestLogger::class, 'request-logger');
    }
}
