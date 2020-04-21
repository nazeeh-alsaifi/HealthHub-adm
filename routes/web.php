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

Route::get('/', function () {
    return view('welcome');
});
//TODO: this will be used to refresh the captcha in the future
//Route::get('/refresh_captcha',function (){ return captcha_src();});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
