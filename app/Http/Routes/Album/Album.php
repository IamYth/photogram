<?php
Route::group([
    'prefix' => 'album',
    'as' => 'album.',
    'namespace' => 'Album',
    ], function () {

    Route::get('',             ['as' => 'index',  'uses' => 'AlbumController@index']);

    Route::get('create',       ['as' => 'create', 'uses' => 'AlbumController@create']);
    Route::post('save',        ['as' => 'save',   'uses' => 'AlbumController@save']);

    Route::get('edit/{id}',    ['as' => 'edit',   'uses' => 'AlbumController@edit']);
    Route::any('update/{id}',  ['as' => 'update', 'uses' => 'AlbumController@update']);

    Route::any('delete/{id}',  ['as' => 'delete', 'uses' => 'AlbumController@delete']);

});