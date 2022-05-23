<?php

namespace Notifcations\Facades;

use Illuminate\Support\Facades\Facade;
use Notifcations\Notifcation;
use Auth;


class Notify extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Notifcations';
    }
    protected static function notifications($notifiable, $parent_type, $message){
        $data = [
            
            'parent_id'     => Auth::user()->id,
            'parent_type'   => $parent_type,
            'message'       => $message,
            'username'      =>Auth::user()->name,
            'image'         => Auth::user()->image,
        ];

        $data = [
            "type"              => $parent_type,
            "notifiable_type"   => User::class,
            "notifiable_id"     => $notifiable,
            "data"              => serialize($data),
        ];

        Notification::create($data);
    }
    
}