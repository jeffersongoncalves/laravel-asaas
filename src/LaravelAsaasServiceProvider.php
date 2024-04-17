<?php

namespace JeffersonSimaoGoncalves\LaravelAsaas;

use JeffersonSimaoGoncalves\LaravelAsaas\LaravelAsaas\Commands\LaravelAsaasCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
<<<<<<< HEAD
=======
use JeffersonSimaoGoncalves\LaravelAsaas\Commands\LaravelAsaasCommand;
>>>>>>> 6ec1604 (Melhorias)

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
