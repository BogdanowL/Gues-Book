<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class HomeController extends Controller
{

    public function index()
    {
        $guest = Guest::latest()->paginate(5);
        return view('home', compact('guest'));
    }


    public function makeFactory(Request $request)
    {
        $request->validate(['quantity' => 'required|numeric|max:250']);
        Guest::seedDB($request->quantity);
        return redirect()->back();
    }


    public function refreshDB()
    {
        Artisan::call('migrate:refresh');
        return redirect()->back();
    }


    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:250|unique:guests',
            'text' => 'required|string|max:2000'
        ]);
        Guest::add($request->all());
        return redirect()->back();
    }

}
