<?php

namespace TheAnadimukt\RoutesDirIterator;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class RoutesDirIteratorServiceProvider extends PackageServiceProvider
{
    /**
     * Method configurePackage
     *
     * @param Package $package
     *
     * @return void
     */
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name('routes-dir-iterator');
    }

    /**
     * packageRegistered
     *
     * @return void
     */
    public function packageRegistered()
    {
        // Register a class in the service container
        $this->app->bind('routes-dir-iterator', function ($app) {
            return new RoutesDirIterator();
        });
    }
}
