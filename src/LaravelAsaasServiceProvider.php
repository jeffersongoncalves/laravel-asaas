<?php

namespace JeffersonSimaoGoncalves\LaravelAsaas\LaravelAsaas;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use JeffersonSimaoGoncalves\LaravelAsaas\LaravelAsaas\Commands\LaravelAsaasCommand;

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
