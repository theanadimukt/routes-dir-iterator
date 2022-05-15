<?php

namespace TheAnadimukt\RoutesDirIterator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TheAnadimukt\RoutesDirIterator\RoutesDirIterator
 */
class RoutesDirIterator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'routes-dir-iterator';
    }
}
