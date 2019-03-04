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

Route::get('/', 'FrontController@index');

Auth::routes();
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin'],function(){
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('users-list', 'AdminController@index')->name('users.list');
    Route::get('add-user', 'AdminController@create')->name('add.user');
    Route::post('add-user', 'AdminController@store')->name('save.user');
});

Route::get('/home', 'HomeController@index')->name('home');

