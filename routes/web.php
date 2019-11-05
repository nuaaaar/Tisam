<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('login', 'AuthController@index');
Route::post('login', 'AuthController@login')->name('login');

Route::prefix('dashboard')->name('dashboard.')->group(function(){

    Route::resource('greeting', 'GreetingController')->except(['store', 'create']);

});

Route::resource('', 'WebsiteGreetingController')->only(['index', 'create', 'store']);

Route::prefix('greeting')->name('greeting.')->group(function(){

    Route::get('random', 'WebsiteGreetingController@random')->name('random');

});
