<?php

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

Route::get('/', function () {
	return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
	
	Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('/users', 'UsersController');
	Route::post('/users/{user}/is-admin', 'UsersController@is_admin');
	Route::resource('/posts', 'PostsController');


	Route::group(['middleware' => 'isAdmin'], function(){
		Route::post('/users/{user}/is-admin', 'UsersController@is_admin');
	});
});		
