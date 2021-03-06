<?php

namespace TheAnadimukt\RoutesDirIterator\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use TheAnadimukt\RoutesDirIterator\RoutesDirIteratorServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        /* Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'TheAnadimukt\\RoutesDirIterator\\Database\\Factories\\'.class_basename($modelName).'Factory'
        ); */
    }

    protected function getPackageProviders($app)
    {
        return [
            RoutesDirIteratorServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        /* config()->set('database.default', 'testing'); */

        /*
        $migration = include __DIR__.'/../database/migrations/create_routes-dir-iterator_table.php.stub';
        $migration->up();
        */
    }
}
