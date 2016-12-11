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

/* Home page */
Route::get('/','PagesController@welcome');

/* Auth routes (logging in and out) */
Route::get('/login', ['as' => 'login', 'uses' => 'AuthController@login']);
Route::post('/handleLogin', ['as' => 'handleLogin', 'uses' => 'AuthController@handleLogin']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);

Route::get('/home', ['middleware' => 'auth', 'as' => 'home', 'uses' => 'UsersController@home']);

/* User Routes */
Route::get('/create', ['as' => 'create', 'uses' => 'UsersController@create']);
Route::resource('users', 'UsersController', ['only' => ['create', 'store']]);

/* Pet Routes */
Route::resource('pets', 'PetsController');

/* HomePet Routes */
Route::resource('homepets', 'HomePetController');

/* Static Page Routes */
Route::get('/inventory','PagesController@inventory');
Route::get('/schedule','PagesController@schedule');
Route::get('/contact','PagesController@contact');
Route::get('/about','PagesController@about');
Route::get('/feedback','PagesController@feedback');
Route::get('/subscribe','PagesController@subscribe');
