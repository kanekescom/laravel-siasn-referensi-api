<?php

namespace Kanekescom\Siasn\Api\Referensi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ReferensiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-siasn-referensi-api')
            ->hasConfigFile()
            ->hasCommands([
                Commands\GetCommand::class,
            ])
            ->hasInstallCommand(function ($command) {
                $command
                    ->startWith(function ($command) {
                        $command->info('Hello, and welcome to my great laravel package!');
                    })
                    ->publishConfigFile()
                    ->askToStarRepoOnGitHub('kanekescom/laravel-siasn-referensi-api')
                    ->endWith(function ($command) {
                        $command->info('Have a great day!');
                    });
            });
    }

    public function packageRegistered(): void
    {
        $this->registerHttpMacroHelpers();
    }

    protected function registerHttpMacroHelpers(): void
    {
        if (! method_exists(\Illuminate\Support\Facades\Http::class, 'macro')) { // Lumen
            return;
        }

        \Illuminate\Support\Facades\Http::macro('siasnReferensi', function () {
            return new Referensi;
        });
    }
}
