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

    Route::get('/categories', [
        'uses' => 'CategoryController@index',
        'as' => 'category.index'
    ]);

    Route::get('/category', [
        'uses' => 'CategoryController@create',
        'as' => 'category.create'
    ]);
    Route::post('/category', [
        'uses' => 'CategoryController@store',
        'as' => 'category.store'
    ]);

    Route::get('/ecategory/{id}/edit', [
        'uses' => 'CategoryController@edit',
        'as' => 'category.edit'
    ])->where('id', '[0-9]+');

    Route::post('/category/{id}/edit', [
        'uses' => 'CategoryController@update',
        'as' => 'category.update'
    ])->where('id', '[0-9]+');

    Route::get('/category/{id}/delete', [
        'uses' => 'CategoryController@destroy',
        'as' => 'category.destroy'
    ])->where('id', '[0-9]+');


});
