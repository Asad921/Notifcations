<?php

namespace Notifcation\Facades;

use Illuminate\Support\Facades\Facade;
use Notifcation\Notifcation;


class notify extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'notify';
    }
    
}