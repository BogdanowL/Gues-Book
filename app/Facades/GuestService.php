<?php


namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class GuestService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'guestService';
    }
}
