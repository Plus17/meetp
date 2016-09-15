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

Route::get('/', [
    'uses' => 'EventController@getIndex',
    'as' => 'event.index'
]);

Route::get('/home', function() {
	return redirect('/');
});

Route::get('/event/{id}', [
    'uses' => 'EventController@show',
    'as' => 'welcome.event.show'
])->where('id', '[0-9]+');

Route::get('/category/{slug}', 'EventController@indexByCategory')
      ->where('slug', '[a-z0-9-]+$')
      ->name('event.category.list');

Route::group(['prefix' => 'admin'], function () {
    
    Route::get('/','AdminController@index')
        ->name('admin.index');

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

Route::group(['prefix' => 'profile'], function () {

    Route::get('/my-events', [
        'uses' => 'EventController@index',
        'as' => 'user.events'
    ]);

    Route::get('/event', [
        'uses' => 'EventController@create',
        'as' => 'event.create'
    ]);

    Route::post('/event', [
        'uses' => 'EventController@store',
        'as' => 'event.store'
    ]);

    Route::get('/my-events/{id}', [
        'uses' => 'EventController@edit',
        'as' => 'event.edit'
    ])->where('id', '[0-9]+');

    Route::post('/my-events/{id}', [
        'uses' => 'EventController@update',
        'as' => 'event.update'
    ])->where('id', '[0-9]+');

    Route::get('/my-events/{id}/delete', [
        'uses' => 'EventController@destroy',
        'as' => 'event.destroy'
    ])->where('id', '[0-9]+');


});

Route::auth();

//Route::get('/home', 'HomeController@index');
