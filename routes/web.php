<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/application','ApplicationController@index')->name('application.index');
Route::get('/getbyNatId/{id}','ApplicationController@getbyNatId');
Route::get('/getbymajor/{id}','ApplicationController@getbymajor');

Route::post('/application/store','ApplicationController@store')->name('application.store');

Route::get('/search', function () {
    return view('admin.search');
});

Route::get('/license-renewal', function () {
    return view('admin.license-renewal');
});
Route::get('/paper-work', function () {
    return view('admin.paper-work');
});

Route::get('/provinces', function () {
    return view('admin.provinces');
});

Route::get('/specializations', function () {
    return view('admin.specializations');
});
Route::get('/universities', function () {
    return view('admin.universities');
});

Route::get('/cities', function () {
    return view('admin.cities');
});
Route::get('/countries', function () {
    return view('admin.countries');
});
