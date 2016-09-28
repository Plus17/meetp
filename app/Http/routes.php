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

	Route::get('/', 'UserController@index')
		->name('user.index');
	
    Route::get('/my-events', 'EventController@index')
    	->name('user.events');

    Route::get('/event', 'EventController@create')
    	->name('event.create');

    Route::post('/event', 'EventController@store')
    	->name('event.store');

    Route::get('/my-events/{id}', 'EventController@edit')
    	->where('id', '[0-9]+')
    	->name('event.edit');

    Route::post('/my-events/{id}', 'EventController@update')
    	->where('id', '[0-9]+')
    	->name('event.update');

    Route::get('/my-events/{id}/delete', 'EventController@destroy')
    	->where('id', '[0-9]+')
    	->name('event.destroy');

});

Route::auth();

//Route::get('/home', 'HomeController@index');
