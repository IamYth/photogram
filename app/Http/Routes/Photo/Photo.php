<?php
Route::group([
    'prefix' => 'photo',
    'as' => 'photo.',
    'namespace' => 'Photo',
    ], function () {

    Route::get('',             ['as' => 'index',  'uses' => 'PhotoController@index']);

    Route::get('create',       ['as' => 'create', 'uses' => 'PhotoController@create']);
    Route::post('save',        ['as' => 'save',   'uses' => 'PhotoController@save']);

    Route::get('edit/{id}',    ['as' => 'edit',   'uses' => 'PhotoController@edit']);
    Route::any('update/{id}',  ['as' => 'update', 'uses' => 'PhotoController@update']);

    Route::any('delete/{id}',  ['as' => 'delete', 'uses' => 'PhotoController@delete']);

});