<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo/registration', 'TaskController@index');

Route::post('/todo/register', 'TaskController@register');

Route::get('/tasklist', 'TaskController@reference');

Route::get('/tasklist/{id}', 'TaskController@show');

Route::get('/tasklist/{id}/edit', 'TaskController@edit');

Route::put('/tasklist/{id}', 'TaskController@update');

Route::delete('/tasklist/{id}', 'TaskController@destroy');

// 認証のルート定義…
Route::get('auth/login', 'Auth\AuthController@getLogin')->name('auth.getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin')->name('auth.postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout')->name('auth.getLogout');

// 登録のルート定義…
Route::get('auth/register', 'Auth\AuthController@getRegister')->name('auth.getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister')->name('auth.postRegister');



