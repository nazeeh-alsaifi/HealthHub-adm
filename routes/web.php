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

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('article={article_id}', 'HomeController@show')->name('article_show');




//------------ end

//-------- Admin Controller Routes-----------


Route::get('admin/article/create', 'AdminController@create')->name('article_create');

Route::post('admin/article', 'AdminController@store')->name('article_store');

Route::get('admin/article/article_num={article_id}/edit', 'AdminController@edit')->name('article_edit');

Route::patch('admin/article/article_num={article_id}', 'AdminController@updatearticle')->name('article_update');

Route::get('admin/article/article_num={article_id}', 'AdminController@delete')->name('article_delete');

Route::get('/home/admin', 'AdminController@admin')->name('admin');
//------------ end

//users routes

Route::get('/home/{username}', 'MembersController@member')->name('member');
Route::get('logout', 'Auth\LoginController@logout');
//-------------- Messages Controller Routes-----------
Route::get('/message/create', 'MessagesController@userCreate')->name('message_create');
Route::post('/message', 'MessagesController@sendMessage');
Route::get('/reply/{sentBy}/{messageId}', 'MessagesController@adminCreate')->name('reply_create');
Route::get('/change_status/{messageID}','MessagesController@updateStatus');
//-----------------end
Route::get('/refresh_captcha','HomeController@refreshCaptcha')->name('refresh');
