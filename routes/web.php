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

Route::get('/', function () { return view('index');});

//Other people mobile posts
Route::get('/mobiles', 'App\Http\Controllers\MobileController@phones')->name('posts');
Route::get('/mobiles/show/{id}', 'App\Http\Controllers\MobileController@show')->name('postshow');

