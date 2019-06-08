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

use App\User;

Route::get('/', function () {
    return view('start', [
        'numberOfUsers' => User::count()
    ]);
});

Route::get('/home', function () {
    return view('start');
});

Route::get('/table', 'EntryController@table');

Route::resource('/teams', 'TeamController');
Route::resource('/players', 'PlayerController');
Route::resource('/entries', 'EntryController');

Route::resource('/forum', 'ForumpostController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
