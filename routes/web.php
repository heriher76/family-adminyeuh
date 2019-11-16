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

Auth::routes();

Route::get('/', 'PagesController@home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
	Route::get('/', 'Admin\AdminPagesController@index');
	Route::get('/parent', 'Admin\UserAdminController@parent');
	Route::get('/child', 'Admin\UserAdminController@child');
	Route::resource('/users', 'Admin\UserAdminController');
	Route::resource('/families', 'Admin\FamilyAdminController');
	Route::resource('/chats', 'Admin\ChatAdminController');
	Route::resource('/events', 'Admin\EAdminController');
});