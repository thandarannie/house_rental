<?php

//house rental home page
Route::get('/', 'HomeController@index')->name('home');

Route::get('/about', function () {
    return view('frontend/about');
});

Route::get('/service', function () {
    return view('frontend/service');
});

Route::get('/agent', function () {
    return view('frontend/agent');
});

Route::get('/contact', function () {
    return view('frontend/contact');
});

Route::get('/detail', function () {
    return view('frontend/detail');
});

Route::get('/edit', function () {
    return view('owner/edit');
});

Route::get('/rent', function () {
    return view('owner/rent');
});


/////////backend/////////////

Auth::routes();

Route::group(['middleware' => 'role:admin'], function(){
    Route::get('/admin', 'HomeController@admin')->name('admin');

    Route::resource('/rentlists', 'RentListsController');
    Route::resource('/housedetails','HouseController');
    Route::resource('/userposts','UserController');
    Route::resource('/townshipdetails','TownshipController');
    Route::resource('/typedetails','TypeController');
    Route::get('/delete_type/{id}', 'TypeController@delete');
    Route::get('/delete_township/{id}', 'TownshipController@delete');

});
