<?php

namespace Theanadimukt\RoutesDirIterator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Theanadimukt\RoutesDirIterator\RoutesDirIterator
 */
class RoutesDirIterator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'routes-dir-iterator';
    }
}
