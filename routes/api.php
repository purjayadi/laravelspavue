<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('/menu', 'MenuController', ['except' => 'show','store','update']);
Route::get('/getmenu','MenuController@show');
Route::get('/editmenu/{id}','MenuController@edit');
Route::get('/searchmenu','MenuController@search');
Route::delete('/menu/{id}', 'MenuController@destroy');

Route::resource('/submenu', 'SubmenuController', ['except' => 'show', 'store']);
Route::get('/getsubmenu','SubmenuController@show');
Route::get('/getidmenu','SubmenuController@getmenu');
Route::get('/editsubmenu/{id}','SubmenuController@edit');
Route::get('/searchsubmenu','SubmenuController@search');
Route::delete('/submenu/{id}','SubmenuController@destroy');

Route::resource('/halaman', 'HalamanController', ['except' => 'show','store','update']);
Route::get('/gethalaman', 'HalamanController@show');
Route::get('/edithalaman/{id}', 'HalamanController@edit');
Route::get('/searchhalaman', 'HalamanController@search');
Route::delete('/halaman/{id}', 'HalamanController@destroy');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
