<?php

use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class StuberatorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package) : void
    {
        $package->name('stuberator')
            ->hasCommands([
                \App\Console\Commands\MakeAction::class,
                \App\Console\Commands\MakeService::class,
                \App\Console\Commands\MakeEnum::class
            ]);
    }
}