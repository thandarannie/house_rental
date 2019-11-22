
<?php

//house rental home page
Route::get('/', function () {
    return view('frontend/index');
});

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


