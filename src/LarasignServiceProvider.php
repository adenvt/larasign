<?php

namespace Adenvt\Larasign;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Adenvt\Larasign\Commands\LarasignCommand;

class LarasignServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('larasign')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_larasign_table')
            ->hasCommand(LarasignCommand::class);
    }
}
