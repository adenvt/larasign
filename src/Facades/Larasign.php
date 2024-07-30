<?php

namespace Adenvt\Larasign\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Adenvt\Larasign\Larasign
 */
class Larasign extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Adenvt\Larasign\Larasign::class;
    }
}
