<?php

namespace Blakroku\LaravelUiStructure;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Blakroku\LaravelUiStructure\Commands\LaravelUiStructureCommand;

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
