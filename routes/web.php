<?php

//house rental home page
/*Route::get('/', function () {
    return view('frontend/index');
});*/

Route::get('/about', function () {
    return view('frontend/about');
});

//backend
Auth::routes();
Route::get('/admin', 'HomeController@admin')->name('admin');

/*Route::get('/admin', function () {
    return view('backend/index');
});*/
Route::get('/service', function () {
    return view('frontend/service');
});

Route::get('/agent', function () {
    return view('frontend/agent');
});

Route::get('/contact', function () {
    return view('frontend/contact');
});

Route::resource('/','OwnerController');
Route::resource('/owner','OwnerController');
Route::resource('/rent','RentController');

