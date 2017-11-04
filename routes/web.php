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

Route::get('/startit-last', function () {
    return view('startit_source');
});

Route::get('/about-us', function () {
    return view('about_us');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/upload', 'PanelController@upload');

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', 'PanelController@index')->name('dashboard');
    Route::get('/articles', 'PanelController@articles')->name('articles');
    Route::get('/articles/add', 'PanelController@store')->name('article-store');
    Route::get('/articles/{id}', 'PanelController@show')->name("show-article");
    Route::post('/articles/add', 'PanelController@store');
    Route::get('/articles/update/{id}', 'PanelController@update')->name("update-article");
    Route::post('/articles/update/{id}', 'PanelController@postUpdate')->name("update-article");
});

