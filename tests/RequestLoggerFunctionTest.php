<?php

namespace RobinDirksen1\LaravelRequestLogger\Test;

use Orchestra\Testbench\TestCase as Orchestra;
use RobinDirksen1\LaravelRequestLogger\RequestLogger;

abstract class RequestLoggerFunctionTest extends Orchestra
{
    /**
     * Check that the multiply method returns correct result.
     * @return void
     */
    public function testMultiplyReturnsCorrectValue()
    {
        $this->assertSame(RequestLogger::multiply(4, 4), 16);
        $this->assertSame(RequestLogger::multiply(2, 9), 18);
    }
}
