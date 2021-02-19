<?php

namespace App\Http\Controllers;

use App\Facades\GuestService;
use App\Http\Requests\MakeSeedRequest;
use App\Http\Requests\StoreGUestRequest;

class HomeController extends Controller
{

    public function index()
    {
        $guest = GuestService::getIndex();
        return view('home', compact('guest'));
    }


    public function makeFactory(MakeSeedRequest $request)
    {
        GuestService::seedDB($request->validated()['quantity']);
        return redirect()->back();
    }


    public function refreshDB()
    {
        GuestService::refreshDataBase();
        return redirect()->back();
    }


    public function store(StoreGUestRequest $request)
    {
        GuestService::storeGuest($request->validated());
        return redirect()->back();
    }

}
