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

/*Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/about-us', function () {
    return view('about_us');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog', 'FrontController@articles')->name('blog-articles');
Route::get('/blog/{slug}/{id}', 'FrontController@article')->name('blogarticle');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/upload', 'PanelController@upload');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', 'PanelController@index')->name('dashboard');
    Route::get('/articles', 'PanelController@articles')->name('articles');
    Route::get('/articles/add', 'PanelController@store')->name('article-store');
    Route::get('/articles/{id}', 'PanelController@show')->name("show-article");
    Route::post('/articles/add', 'PanelController@store');
    Route::get('/articles/update/{id}', 'PanelController@update')->name("update-article");
    Route::post('/articles/update/{id}', 'PanelController@postUpdate')->name("update-article");
    Route::get('/articles/delete/{id}', 'PanelController@delete')->name("delete-article");
});

