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

Route::prefix('user')->group(function() {
    Route::get('/', 'UserController@index')->name('user.list');
    Route::get('/create', 'UserController@create')->name('user.create');
    Route::post('/', 'UserController@store')->name('user.store');
    Route::get('/show/{id}', 'UserController@show')->name('user.show');
    Route::get('/edit/{id}', 'UserController@edit')->name('user.edit');
    Route::put('/', 'UserController@update')->name('user.update');
    Route::get('/delete/{id}','UserController@destroy')->name('user.destroy');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

