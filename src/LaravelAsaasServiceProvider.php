<?php

namespace JeffersonSimaoGoncalves\LaravelAsaas\LaravelAsaas;

use JeffersonSimaoGoncalves\LaravelAsaas\LaravelAsaas\Commands\LaravelAsaasCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelAsaasServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-asaas')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-asaas_table')
            ->hasCommand(LaravelAsaasCommand::class);
    }
}
