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
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'],function(){
    
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::resource('users', 'AdminController');
});

Route::get('/home', 'HomeController@index')->name('home');

