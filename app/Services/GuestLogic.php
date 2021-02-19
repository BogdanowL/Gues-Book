<?php


namespace App\Services;


use App\Guest;
use Illuminate\Support\Facades\Artisan;

class GuestLogic
{

    public function getIndex()
    {
        return Guest::latest()->paginate(5);
    }

    public function seedDB(int $quantity)
    {
        factory(Guest::class, $quantity)->create();
    }

    public function refreshDataBase()
    {
        Artisan::call('migrate:refresh');
    }

    public function storeGuest($fields)
    {
          Guest::create($fields);
    }

}
