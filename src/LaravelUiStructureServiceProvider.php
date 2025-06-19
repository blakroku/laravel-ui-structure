<?php

namespace Blakroku\LaravelUiStructure;

use Blakroku\LaravelUiStructure\Commands\LaravelUiStructureCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelUiStructureServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-ui-structure')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_ui_structure_table')
            ->hasCommand(LaravelUiStructureCommand::class);
    }
}
