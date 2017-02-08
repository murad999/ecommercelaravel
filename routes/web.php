<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


	Route::get('/', 'HomeController@index')->name('home');
	Route::get('/myadmin', 'HomeController@index')->name('dashboard');
Route::group(['prefix' => 'admin','middleware' => ['auth','permissions']], function () {	
	Route::resource('roles','RolesController');
	Route::get('/users', 'Auth\RegisterController@showUserLists')->name('users.index');
	Route::get('/users/{user}', 'Auth\RegisterController@showUser')->name('users.show');
	Route::get('/users/{user}/edit', 'Auth\RegisterController@editUser')->name('users.edit');
	Route::delete('/users/{user}', 'Auth\RegisterController@destroyUser')->name('users.destroy');
	Route::resource('site_settings', 'SiteSettingsController',
                ['only' => ['edit', 'update']]);	
	
});

Auth::routes();




