<?php

namespace Anadimukt\RoutesDirIterator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Anadimukt\RoutesDirIterator\RoutesDirIterator
 */
class RoutesDirIterator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'routes-dir-iterator';
    }
}
