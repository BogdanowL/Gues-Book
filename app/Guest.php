<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $guarded  = [];


    public static function add($fields)
    {
        $guest = new static;
        $guest->fill($fields);
        $guest->save();
        return $guest;
    }

    public static function seedDB(int $quantity)
    {
        factory(Guest::class, $quantity)->create();
    }

}
