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

Route::get('/todo/home', 'TaskController@index');

Route::post('/todo/register', 'TaskController@register');

Route::get('/tasklist', 'TaskController@test');

Route::get('/tasklist/{id}', 'TaskController@show');

Route::get('/tasklist/{id}/edit', 'TaskController@edit');

Route::put('/tasklist/{id}', 'TaskController@update');

Route::delete('/tasklist/{id}', 'TaskController@destroy');



