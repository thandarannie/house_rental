<?php



//house rental home page
Route::get('/','OwnerController@index');
Route::resource('/owner','OwnerController');

Route::resource('/township','TownController');


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



//Route::resource('/owner','HouseController');

Route::get('/rent', function () {
    return view('owner/rent');
});

Route::resource('/profile','ProfileController');

/////////backend/////////////

Auth::routes();
Route::group(['middleware' => 'role:user'], function(){
    Route::resource('/rent','RentController');

});

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
