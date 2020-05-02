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
Route::get('home/{username}/article','ArticlesController@show')->name('show');
Route::get('home/article','ArticlesController@show');//{articale_id}
//Route::get('/article/show/{title}','ArticlesController@show',function($title){});
Route::get('admin/article/create','ArticlesController@create')->name('create');

//------------ end

//users routes
Route::get('/home/{username}', 'HomeController@user')->name('user');
//------------ end

