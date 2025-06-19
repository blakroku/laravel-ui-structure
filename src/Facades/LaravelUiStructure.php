<?php

namespace Blakroku\LaravelUiStructure\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Blakroku\LaravelUiStructure\LaravelUiStructure
 */
class LaravelUiStructure extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Blakroku\LaravelUiStructure\LaravelUiStructure::class;
    }
}
