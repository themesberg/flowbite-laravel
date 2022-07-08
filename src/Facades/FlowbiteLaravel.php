<?php

namespace Flowbite\FlowbiteLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Flowbite\FlowbiteLaravel\FlowbiteLaravel
 */
class FlowbiteLaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'flowbite-laravel';
    }
}
