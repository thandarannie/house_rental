<?php

//house rental home page
/*Route::get('/', function () {
    return view('frontend/index');
});*/
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

Route::resource('/','OwnerController');
Route::resource('/owner','OwnerController');
Route::resource('/rent','RentController');

Route::get('/edit', function () {
    return view('owner/edit');
});

Route::get('/rent', function () {
    return view('owner/rent');
});


/////////backend/////////////

Auth::routes();
Route::get('/admin', 'HomeController@admin')->name('admin');
Route::resource('/rentlists', 'RentListsController');
Route::resource('/housedetails','HouseController');
Route::get('/userposts', function () {
    return view('backend/userposts');
});
Route::resource('/townshipdetails','TownshipController');
/*Route::get('/dd', function () {
    return view('backend/addtownship');
});*/
/*Route::get('/admin', function () {
    return view('backend/index');
});*/
