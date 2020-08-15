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

Route::get('/tweets', 'TweetController@index');
//TweetControllerのpublic function index()を見に行く

Route::get('/tweets/create', 'TweetController@create');

Route::post('/tweets', 'TweetController@store');

Route::get('/tweets/{id}', 'TweetController@show');

Route::get('/tweets/{id}/edit', 'TweetController@edit');

Route::get('/todo/home', 'TaskController@index');

Route::post('/todo/register', 'TaskController@register');


