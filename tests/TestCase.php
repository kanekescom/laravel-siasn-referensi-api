<?php

namespace Kanekescom\Siasn\Api\Referensi\Tests;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * @param  \Illuminate\Foundation\Application  $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            \Kanekescom\Siasn\Api\Referensi\ReferensiServiceProvider::class,
        ];
    }

    /**
     * Set up the environment.
     *
     * @param  \Illuminate\Foundation\Application  $app
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('siasn_api', require __DIR__.'/../vendor/kanekescom/laravel-siasn-api/config/siasn_api.php');
    }
}
