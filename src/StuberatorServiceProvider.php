<?php
namespace Record\Stuberator;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class StuberatorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package) : void
    {
        $package->name('stuberator')
            ->publishesServiceProvider('StuberatorServiceProvider')
            ->hasConsoleCommands([
                \Record\Stuberator\Console\Commands\MakeAction::class,
                \Record\Stuberator\Console\Commands\MakeService::class,
                \Record\Stuberator\Console\Commands\MakeEnum::class
            ])
            ->hasInstallCommand(function(InstallCommand $command) {
                $command
                    ->copyAndRegisterServiceProviderInApp();
            });;


    }
}