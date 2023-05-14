<?php

namespace Alitindrawan24\IPWhitelist\Tests;

use Alitindrawan24\IPWhitelist\IPWhitelistServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

    }

    protected function getPackageProviders($app)
    {
        return [
            IPWhitelistServiceProvider::class,
        ];
    }
}
