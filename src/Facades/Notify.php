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
    protected static function store($notifiable, $parent_type, $message,$notifiable_type)
    {
        $data = [
            
            'parent_id'     => Auth::user()->id,
            'parent_type'   => $parent_type,
            'message'       => $message,
            'username'      =>Auth::user()->name,
            'image'         => Auth::user()->image,
        ];

        $data = [
            "type"              => $parent_type,
            "notifiable_type"   => $notifiable_type,
            "notifiable_id"     => $notifiable,
            "data"              => serialize($data),
        ];

        Notifcation::create($data);
    }

    protected static function get_notification($notifications){
        if(!empty($notifications)){
            foreach ($notifications as $key => $value) {
                $value->data = unserialize($value->data);
            }
        }

        return $notifications;
    }
    
}