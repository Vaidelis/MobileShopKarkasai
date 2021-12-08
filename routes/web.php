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
Route::get('/mobiles', 'App\Http\Controllers\MobileController@phones')->name('posts');
Route::group(['middleware' => ['auth']], function() {
//Other people mobile posts

Route::get('/mobiles/show/{id}', 'App\Http\Controllers\MobileController@show')->name('postshow');
//Posto sukūrimas
Route::get('/mobiles/create', 'App\Http\Controllers\MobileController@create')->name('postcreate');
Route::post('/mobiles/store', 'App\Http\Controllers\MobileController@store')->name('poststore');
//Bookmarks show
Route::get('/bookmarks', 'App\Http\Controllers\UserController@bookshow')->name('book');
Route::get('/bookmarks/show/{id}', 'App\Http\Controllers\UserController@bookshowinfo')->name('bookshow');
//Bookmarks create
Route::get('/mobiles/search', 'App\Http\Controllers\MobileController@searchview')->name('searchvie');
Route::any('/mobiles/search/results', 'App\Http\Controllers\MobileController@search')->name('postsearch');
Route::get('/post/search/bookmark', 'App\Http\Controllers\MobileController@bookmark')->name('postbookmark'); //pridėti
//Bookmarks trynimas
Route::delete('/bookmarks/delete/{id}', 'App\Http\Controllers\UserController@bookmarkdelete')->name('bookmarkdestroy');
//Posto trynimas
Route::delete('/mobiles/delete/{id}', 'App\Http\Controllers\MobileController@mobiledelete')->name('mobilekdestroy');
//Userio
Route::get('/users', 'App\Http\Controllers\UserController@usershow')->name('usersview');
Route::get('/users/createrole', 'App\Http\Controllers\UserController@createrole')->name('rolecreate');

Route::delete('/users/delete/{id}', 'App\Http\Controllers\UserController@deleterole')->name('roledelete');

Route::get('/users/edit/{id}', 'App\Http\Controllers\UserController@editrole')->name('roleedit');
Route::match(['put','patch'],'{id}/editrle', 'App\Http\Controllers\UserController@update')->name('coleupdate');
//Redagavimas
Route::get('/mobiles/show/{id}/edit', 'App\Http\Controllers\MobileController@edit')->name('mobileedit');
Route::match(['put','patch'],'{id}/edit', 'App\Http\Controllers\MobileController@update')->name('mobileupdate');

    Route::get('/groups/groupComments/{id}/editCom', 'App\Http\Controllers\GroupController@edit')->name('comedit');
    Route::match(['put','patch'],'{id}/editCom', 'App\Http\Controllers\GroupController@update')->name('comupdate');
//grupės
Route::get('/groups/{id}', 'App\Http\Controllers\GroupController@groupshow')->name('groupview');
Route::get('/groups/groupComments/{id}', 'App\Http\Controllers\GroupController@show')->name('groupshow');
Route::get('/groups/{id}/{groupid}/join', 'App\Http\Controllers\GroupController@join')->name('groupjoin');
Route::get('/groups/groupComments/{id}/write/{grouphas}', 'App\Http\Controllers\GroupController@writecomment')->name('postcomment');

Route::delete('/group/groupcomments/leave/{id}', 'App\Http\Controllers\GroupController@leave')->name('groupleave');
Route::get('/groups/create', 'App\Http\Controllers\GroupController@groupcreate')->name('groupcreate');
});
//header
Route::get('/appv2', function() {
    return view('layouts.appv2');
});

//---------------------------Paieška
Route::any ( '/search', function () {
    $q = Request::input ( 'q' );
    $message = Post::where ( 'brand', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $message ) > 0){
        if(strlen ( $q ) > 0){
            $query = 'INSERT INTO `mobileshop`.`search_info` (`mobileshop`.`search_info`.`search_info`,`mobileshop`.`search_info`.`user_id`,`mobileshop`.`search_info`.`date`) VALUES (:q,:id,:dt)';
            $insert = DB::insert($query, ['q' => $q,'id' => Auth::user()->id,'dt' => date('Y-m-d H:i:s')]);
        }
        return view ( 'Forumas.search' )->withDetails ( $message )->withQuery ( $q);
    }
    else{
        if(strlen ( $q ) > 0){
            $query = 'INSERT INTO `mobileshop`.`search_info` (`mobileshop`.`search_info`.`search_info`,`mobileshop`.`search_info`.`user_id`,`mobileshop`.`search_info`.`date`) VALUES (:q,:id,:dt)';
            $insert = DB::insert($query, ['q' => $q,'id' => Auth::user()->id,'dt' => date('Y-m-d H:i:s')]);
        }
        return view ( 'Forumas.search' )->withMessage ( 'Temų su tokiu pavadinimu nebuvo rasta' );
    }
} ) ->name('.search');
//----------------------------
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
