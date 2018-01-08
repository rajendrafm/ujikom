<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/home', 'HomeController@index')->name('home');

//Admin
Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>['auth']], function() {
	Route::resource('prestasi','prestasiController');
    Route::resource('alumni','alumniController');
    Route::resource('berita','beritaController');
    Route::resource('kurikulum','kurikulumController');
    Route::resource('contact','contactController');
    Route::resource('testing','contactController');
});
//user
Route::get('/prestasi','prestasiController@user');
Route::get('/alumni','alumniController@user');

Route::get('/berita', function () {
    return view('berita.berita');
});
Route::get('/kurikulum', function () {
    return view('kurikulum.kurikulum');
});
Route::get('/contact', function () {
    return view('contact.contact');
});
    Route::resource('/','GuesController');
//Testing
