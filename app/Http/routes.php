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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {

    Route::get('/categories', 'CategoryController@index')
        ->name('category.index');

    Route::get('/category', 'CategoryController@create')
        ->name('category.create');

    Route::post('/category', 'CategoryController@store')
        ->name('category.store');

    Route::get('/category/{id}/edit', 'CategoryController@edit')
        ->where('id', '[0-9]+')
        ->name('category.edit');

    Route::post('/category/{id}/edit', 'CategoryController@update')
        ->where('id', '[0-9]+')
        ->name('category.update');

    Route::get('/category/{id}/delete', 'CategoryController@destroy')
        ->where('id', '[0-9]+')
        ->name('category.destroy');

});
