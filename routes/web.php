<?php

//house rental home page
Route::resource('/','OwnerController');
Route::resource('/owner','OwnerController');
//Route::resource('/create','OwnerController@create');

Route::resource('/township','TownController');



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



//Route::resource('/owner','HouseController');

Route::get('/rent', function () {
    return view('owner/rent');
});


