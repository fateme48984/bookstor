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



Route::prefix('book')->group(function() {
    Route::get('/', 'BookController@index')->name('book.list');
    Route::get('/create', 'BookController@create')->name('book.create');
    Route::post('/', 'BookController@store')->name('book.store');
    Route::get('/show/{id}', 'BookController@show')->name('book.show');
    Route::get('/{id}/edit', 'BookController@edit')->name('book.edit');
    Route::put('/show/{id}', 'BookController@update')->name('book.update');
    Route::delete('/delete/{id}','BookController@destroy')->name('book.destroy');

});

Route::prefix('author')->group(function() {
    Route::get('/', 'AuthorController@index')->name('author.list');
   /* Route::get('/', function () {
        return Modules\Books\Entities\Author::paginate(4);
    })->name('author.list');*/
    Route::get('/create', 'AuthorController@create')->name('author.create');
    Route::post('/', 'AuthorController@store')->name('author.store');
    Route::get('/show/{id}', 'AuthorController@show')->name('author.show');
    Route::get('/{id}/edit', 'AuthorController@edit')->name('author.edit');
    Route::put('/show/{id}', 'AuthorController@update')->name('author.update');
    Route::delete('/delete/{id}','AuthorController@destroy')->name('author.destroy');

});

Route::prefix('cat')->group(function() {
    Route::get('/', 'CategoryController@index')->name('cat.list');
    Route::get('/create', 'CategoryController@create')->name('cat.create');
    Route::post('/', 'CategoryController@store')->name('cat.store');
    Route::get('/show/{id}', 'CategoryController@show')->name('cat.show');
    Route::get('/{id}/edit', 'CategoryController@edit')->name('cat.edit');
    Route::put('/show/{id}', 'CategoryController@update')->name('cat.update');
    Route::delete('/delete/{id}','CategoryController@destroy')->name('cat.destroy');

});

Route::prefix('publisher')->group(function() {
    Route::get('/', 'PublisherController@index')->name('publisher.list');
    Route::get('/create', 'PublisherController@create')->name('publisher.create');
    Route::post('/', 'PublisherController@store')->name('publisher.store');
    Route::get('/show/{id}', 'PublisherController@show')->name('publisher.show');
    Route::get('/{id}/edit', 'PublisherController@edit')->name('publisher.edit');
    Route::put('/show/{id}', 'PublisherController@update')->name('publisher.update');
    Route::delete('/delete/{id}','PublisherController@destroy')->name('publisher.destroy');

});

Route::prefix('translator')->group(function() {
    Route::get('/', 'TranslatorController@index')->name('translator.list');
    Route::get('/create', 'TranslatorController@create')->name('translator.create');
    Route::post('/', 'TranslatorController@store')->name('translator.store');
    Route::get('/show/{id}', 'TranslatorController@show')->name('translator.show');
    Route::get('/{id}/edit', 'TranslatorController@edit')->name('translator.edit');
    Route::put('/show/{id}', 'TranslatorController@update')->name('translator.update');
    Route::delete('/delete/{id}','TranslatorController@destroy')->name('translator.destroy');

});



Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
    // list all lfm routes here...


