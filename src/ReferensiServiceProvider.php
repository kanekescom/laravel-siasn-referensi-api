<?php

namespace Kanekescom\Siasn\Api\Referensi;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class ReferensiServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     */
    public function boot(): void
    {
        $this->offerPublishing();

        $this->registerCommands();

        $this->registerHttpMacroHelpers();
    }

    /**
     * Register any package services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/siasn_referensi_api.php', 'siasn_referensi_api');

        // Register the service the package provides.
        $this->app->singleton(Referensi::class, function ($app) {
            return new Referensi;
        });
    }

    /**
     * Offer publishing.
     */
    protected function offerPublishing(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        if (! function_exists('config_path')) {
            // function not available and 'publish' not relevant in Lumen
            return;
        }

        $this->publishes([
            __DIR__.'/../config/siasn_referensi_api.php' => config_path('siasn_referensi_api.php'),
        ], 'config');
    }

    /**
     * Register commands.
     */
    protected function registerCommands(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            Commands\GetReferensi::class,
        ]);
    }

    /**
     * Register HTTP Macros.
     */
    protected function registerHttpMacroHelpers(): void
    {
        if (! method_exists(Http::class, 'macro')) { // Lumen
            return;
        }

        Http::macro('siasnReferensi', function () {
            return new Referensi;
        });
    }
}
