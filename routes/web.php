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
    return view('welcome');
});

Route::get('/cv', function () {
    return view('includes.cv');
});

Route::get('/cvform', function () {
    return view('includes.cvform');
});

// Route::resource('/feedback', 'FeedbackController');
// Route::resource('/tests', 'testController');
// // Route::get('/tests/pdf','testController@PDF')->name('pdf');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
