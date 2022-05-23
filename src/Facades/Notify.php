<?php

namespace Notifcations\Facades;

use Illuminate\Support\Facades\Facade;
use Notifcations\Notifcation;


class Notify extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Notifcations';
    }
    
}