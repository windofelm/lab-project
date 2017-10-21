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

Route::get('/foo', function () {
    return view('foo');
});

Route::get('/fooo', function () {
    return view('fooo');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

