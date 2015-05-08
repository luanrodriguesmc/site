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

Route::get('/', 'SiteController@index');


Route::group(['middleware' => 'auth'], function() {
    Route::get('/admin', 'HomeController@index');
    Route::resource('slide'       , 'SlideController');
    Route::resource('noticia'       , 'NoticiaController');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
