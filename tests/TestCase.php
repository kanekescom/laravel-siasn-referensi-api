<?php

namespace Kanekescom\Siasn\Referensi\Api\Tests;

use Kanekescom\Siasn\Referensi\Api\ReferensiServiceProvider;
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
            ReferensiServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('siasn-api', require __DIR__.'/../vendor/kanekescom/laravel-siasn-api/config/siasn-api.php');
    }
}
