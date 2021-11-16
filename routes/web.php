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
Route::get('/bookmarks', 'App\Http\Controllers\UserController@bookshow')->name('book');
Route::get('/bookmarks/show/{id}', 'App\Http\Controllers\UserController@bookshowinfo')->name('bookshow');

//Userio
Route::get('/users', 'App\Http\Controllers\UserController@usershow')->name('usersview');

//grupės
Route::get('/groups', 'App\Http\Controllers\GroupController@groupshow')->name('groupview');
Route::get('/groups/groupComments/{id}', 'App\Http\Controllers\GroupController@show')->name('groupshow');

//header
Route::get('/appv2', function() {
    return view('layouts.appv2');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
