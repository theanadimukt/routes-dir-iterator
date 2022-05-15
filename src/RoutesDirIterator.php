<?php

namespace Theanadimukt\RoutesDirIterator;

class RoutesDirIterator
{
    /**
     * Read folder recursively to import all routes
     *
     * @param string $folder [absolute path of folder]
     *
     * @return void
     */
    public function read(string $folder): void
    {
        $dirIterator = new \RecursiveDirectoryIterator($folder);

        /** @var \RecursiveDirectoryIterator | \RecursiveIteratorIterator $it */
        $it = new \RecursiveIteratorIterator($dirIterator);

        while ($it->valid()) {
            if (
                ! $it->isDot()
                && $it->isFile()
                && $it->isReadable()
                && $it->current()->getExtension() === 'php'
            ) {
                require $it->key();
            }
            $it->next();
        }
    }
}
