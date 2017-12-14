<?php

namespace RobinDirksen1\LaravelRequestLogger\Test;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use RobinDirksen1\LaravelRequestLogger\RequestLoggerFacade;

class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider.
     * @param  \Illuminate\Foundation\Application $app
     * @return RobinDirksen1\LaravelRequestLogger\LaravelRequestLoggerServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [LaravelRequestLogger::class];
    }

    /**
     * Load package alias.
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'RequestLogger' => RequestLoggerFacade::class,
        ];
    }
}
