<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('home', function()
{
    $data = array();

    if (Auth::check()) {
        $data = Auth::user();
    }
    return View::make('home', array('data'=>$data));
});


//Loginrutt
Route::get('/', function()
{
    $data = array();

    if (Auth::check()) {
        $data = Auth::user();
    return View::make('home', array('data'=>$data));
    }
    return View::make('start', array('data'=>$data));
});




//Autentisering

Route::resource('sessions','SessionsController');

Route::get('logout', 'SessionsController@destroy');