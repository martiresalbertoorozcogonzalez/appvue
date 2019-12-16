<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('invoice', function () {
    return view('invoice');
});

Route::get('{path}', "HomeController@index")->where('path', '([A-z\d-\/_.]+)?');
