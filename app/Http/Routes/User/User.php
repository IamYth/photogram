<?php
Route::group([
    'prefix' => 'user',
    'as' => 'user.',
    'namespace' => 'User',
    ], function () {

    Route::get('/{id}',        ['as' => 'index',  'uses' => 'UserController@index']);

    Route::get('create',       ['as' => 'create', 'uses' => 'UserController@create']);
    Route::post('save',        ['as' => 'save',   'uses' => 'UserController@save']);

    Route::get('edit/{id}',    ['as' => 'edit',   'uses' => 'UserController@edit']);
    Route::any('update/{id}',  ['as' => 'update', 'uses' => 'UserController@update']);

    Route::any('delete/{id}',  ['as' => 'delete', 'uses' => 'UserController@delete']);

});