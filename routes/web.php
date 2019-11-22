<?php

//frontend
Route::get('/', function () {
    return view('frontend/index');
});

Route::resource('/create','HouseController');

Route::get('/about', function () {
    return view('frontend/about');
});

//backend
Auth::routes();
Route::get('/admin', 'HomeController@admin')->name('admin');

/*Route::get('/admin', function () {
    return view('backend/index');
});*/

