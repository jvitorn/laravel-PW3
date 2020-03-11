<?php

Route::get('/', function () {
    return redirect()->route('users');
});

Route::get('usuarios', 'UserController@users')->name('users');

Route::get('cadastrar', function () {
    return view('novo');
});

Route::get('editar/{userId}', 'UserController@edit');

Route::post('storage', 'UserController@storage');

Route::put('update/{user}', 'UserController@update');

Route::delete('delete/{user}', 'UserController@delete');
