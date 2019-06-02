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
Route::get('/', function () {
    return view('start');
});

Route::get('/home', function () {
    return view('start');
});

Route::get('/table', function () {
    return view('table', 'EntryController@table');
});

Route::resource('/teams', 'TeamController');
Route::resource('/players', 'PlayerController');
Route::resource('/entries', 'EntryController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
