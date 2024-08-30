<?php

namespace 3rMedia\:uc:package\Facades;

use Illuminate\Support\Facades\Facade;

class :uc:package extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return ':lc:package';
    }
}
