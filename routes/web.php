<?php



//house rental home page
Route::resource('/','OwnerController');
Route::resource('/owner','OwnerController');
//Route::resource('/create','OwnerController@create');

Route::resource('/township','TownController');

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

Route::resource('/rent','RentController');


Route::resource('/user','UserController');

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
