<?php


//house rental home page
Route::get('/','OwnerController@index');

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
Route::resource('/owner','OwnerController');

/////////backend/////////////

Auth::routes();
 Route::resource('/owner','OwnerController');
Route::group(['middleware'=> 'role:owner'],function(){
});

Route::group(['middleware' => 'role:user'], function(){
    Route::resource('/rent','RentController');

});

Route::group(['middleware' => 'role:admin'], function(){
    Route::get('/admin', 'HomeController@admin')->name('admin');
    Route::get('/ownerlists','OwnerController@ownerlists')->name('ownerlists');
     Route::get('/renthistory','RentListsController@renthistory')->name('renthistory');
    Route::resource('/rentlists', 'RentListsController');
    Route::resource('/housedetails','HouseController');
    Route::resource('/userposts','UserController');
    Route::resource('/townshipdetails','TownshipController');
    Route::resource('/typedetails','TypeController');
    Route::get('/delete_type/{id}', 'TypeController@delete');
    Route::get('/delete_township/{id}', 'TownshipController@delete');
    Route::get('/delete_housedetails/{id}','HouseController@delete');
    Route::get('/delete_rent/{id}','RentListsController@delete');
    Route::get('/delete_userpost/{id}','UserController@delete');
    Route::get('/email/{email}/{house_id}/{rent_id}','EmailController@index');
     Route::get('/cancelemail/{email}/{rent_id}','EmailController@cancelemail');
});


