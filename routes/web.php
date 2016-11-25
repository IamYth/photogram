<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//User



Route::group([
    'namespace' => 'User',
    ], function () {
    Route::get('{id}',        ['as' => 'index',  'uses' => 'UserController@index']);

	    Route::group([
			'prefix' => 'profile',
			'as' => 'profile.',
	    	], function () {

		    Route::get('edit/{id}',    ['as' => 'edit',   'uses' => 'UserController@edit']);

			//Album
				Route::group([
				    'prefix' => 'album',
				    'as' => 'album.',
				    ], function () {
				    Route::get('/',             ['as' => 'index',  'uses' => 'AlbumController@index']);
				    Route::get('create',       ['as' => 'create', 'uses' => 'AlbumController@create']);
				    Route::post('save',        ['as' => 'save',   'uses' => 'AlbumController@save']);
				    Route::get('edit/{album_id}',    ['as' => 'edit',   'uses' => 'AlbumController@edit']);
				    Route::any('update/{album_id}',  ['as' => 'update', 'uses' => 'AlbumController@update']);
				    Route::any('delete/{album_id}',  ['as' => 'delete', 'uses' => 'AlbumController@delete']);
					
						//Photo
							Route::group([
							    'prefix' => '{album_id}/photo',
							    'as' => 'photo.',
							    'namespace' => 'Photo',
							    ], function () {
							    Route::get('',             ['as' => 'index',  'uses' => 'PhotoController@index']);
							    Route::get('create',       ['as' => 'create', 'uses' => 'PhotoController@create']);
							    Route::post('save',        ['as' => 'save',   'uses' => 'PhotoController@save']);
							    Route::get('edit/{id_photo}',    ['as' => 'edit',   'uses' => 'PhotoController@edit']);
							    Route::any('update/{id_photo}',  ['as' => 'update', 'uses' => 'PhotoController@update']);
							    Route::any('delete/{id_photo}',  ['as' => 'delete', 'uses' => 'PhotoController@delete']);

					});

				});

		});

});
Route::get('/', ['as' => 'user', 'uses' => 'UserController@index']);
//Авторизация
//Auth::routes();

