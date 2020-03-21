<?php

namespace Oasin\Blockvel\Facades;

use Illuminate\Support\Facades\Facade;

class Blockvel extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Oasin\Blockvel\Contracts\BlockvelContract::class;
    }
}
