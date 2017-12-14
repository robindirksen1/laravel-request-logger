<?php

namespace RobinDirksen1\LaravelRequestLogger;

use Illuminate\Support\Facades\Facade;

class RequestLoggerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'request-logger';
    }
}
