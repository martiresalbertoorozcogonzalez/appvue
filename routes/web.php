<?php

Route::get('/', function () {
    return view('inicio.index');
});

Route::get('ejemplo', function () {
    return view('inicio.ejemplo');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('invoice', function () {
    return view('invoice');
});

Route::get('{path}', "HomeController@index")->where('path', '([A-z\d-\/_.]+)?');
