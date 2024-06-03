<?php

namespace carlosmls1\FilamentIntercom\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \carlosmls1\FilamentIntercom\FilamentIntercom
 */
class FilamentIntercom extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \carlosmls1\FilamentIntercom\FilamentIntercom::class;
    }
}
