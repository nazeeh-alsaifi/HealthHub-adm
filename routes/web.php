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


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//-------- Articles Controller Routes-----------
Route::get('/article/show','ArticlesController@show');
//Route::get('/article/show/{title}','ArticlesController@show',function($title){});
Route::get('/article/create','ArticlesController@create');

//------------ end
Route::get('/home/admin', 'HomeController@admin')->name('admin');
