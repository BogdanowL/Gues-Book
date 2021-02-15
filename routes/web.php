<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', 'HomeController@index')->name('home');

Route::post('/factory', 'HomeController@makeFactory')->name('factory');

Route::get('/refresh', 'HomeController@refreshDB')->name('refresh');

Route::post('/create', 'HomeController@store')->name('create');
