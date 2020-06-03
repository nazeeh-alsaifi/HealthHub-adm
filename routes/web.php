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



//--------------------- Expert System --------------------------
Route::get('/expert/create', 'ExpertController@userCreate')->name('expert_create');
Route::post('/expert', 'ExpertController@predict')->name('expert_predict');

//----------------------------------------------------------
