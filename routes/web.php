<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    if (Auth::guest()) {
        return view('index')->withTitle('Welcome!');
    } else {
        //return View::make ('index');
        return Redirect::to('user/');
        //return view('index')->withTitle('Welcome!');
    }
});

Route::get('user/search','UserController@search');


Route::group(['middleware' => ['web']], function() {
    Route::resource('couple','CoupleController');
});

Route::group(['middleware' => ['web']], function() {
    Route::resource('user','UserController');
});

Route::group(['middleware' => ['web']], function() {
    Route::resource('donation','DonationController');
});

Route::group(['middleware' => ['web']], function() {
    Route::resource('nonprofit','NonprofitController');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
