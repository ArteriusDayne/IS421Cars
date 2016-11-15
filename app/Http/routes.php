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

Route::get('/','PagesController@welcome');

/*** User Routes ***/
Route::get('/login', ['as' => 'login', 'uses' => 'AuthController@login']);
Route::post('/handleLogin', ['as' => 'handleLogin', 'uses' => 'AuthController@handleLogin']);
Route::get('/home', ['middleware' => 'auth', 'as' => 'home', 'uses' => 'UsersController@home']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
Route::get('/create', ['as' => 'create', 'uses' => 'UsersController@create']);
Route::resource('users', 'UsersController', ['only' => ['create', 'store']]);


Route::get('/new-sales', ['as' => 'sales', 'uses' => 'SalesController@create']);
Route::resource('sales', 'SalesController', ['only' => ['create', 'store']]);

/*** Car Routes ***/
Route::resource('cars', 'CarsController');
Route::get('/inventory','CarsController@index');
	
/*** Static Page Routes ***/
Route::get('/schedule','PagesController@schedule');
Route::get('/contact','PagesController@contact');
Route::get('/about','PagesController@about');
Route::get('/feedback','PagesController@feedback');
Route::get('/subscribe','PagesController@subscribe');
