<?php

namespace Notifcations\Facades;

use Illuminate\Support\Facades\Facade;
use Notifcations\Notifcation;


class notify extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'notify';
    }
    
}