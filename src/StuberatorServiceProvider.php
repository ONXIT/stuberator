<?php
namespace Record\Stuberator;

use Record\Stuberator\Console\Commands\MakeAction;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class StuberatorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package) : void
    {
        $package
            ->name('stuberator')
            ->publishesServiceProvider('StuberatorServiceProvider')
            ->hasCommand(MakeAction::class);
    }
}