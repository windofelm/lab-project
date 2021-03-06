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

header('Access-Control-Allow-Origin: *');

Route::get('/ex', function () {
    
    $arr = [
      "dd" => "55",
      "ff" => 45
    ];

    dd(json_encode($arr));
});


Route::get('/about-us', function () {
    return view('about_us');
})->name('about-us');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/', 'FrontController@index')->name('main');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('contact', 'MessageController@store');



Route::get('/blog/{category_slug?}', 'FrontController@articles')->name('blog-articles');
Route::get('/detail/{slug}', 'FrontController@article')->name('blogarticle');
Route::post('/comment/{article_id}', 'FrontController@comment')->name('post-comment');
Route::get('/tag/{tag_slug}', 'FrontController@tagArticles')->name('tag-articles');

Route::get('/sample', 'FrontController@sample');

//Route::get('/blog/{slug}/{id}', 'FrontController@article')->name('blogarticle');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/upload', 'PanelController@upload');
Route::get('/questions', 'FrontController@questions');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', 'PanelController@index')->name('dashboard');
    Route::get('/articles', 'PanelController@articles')->name('articles');
    Route::get('/categories', 'PanelController@categories')->name('categories');
    Route::post('/categories', 'PanelController@addCategories')->name('add-category');
    Route::get('/categories/{id}', 'PanelController@deleteCategories')->name('delete-category');
    Route::get('/messages', 'MessageController@messages')->name('messages');
    Route::get('/articles/add', 'PanelController@store')->name('article-store');
    Route::get('/articles/{id}', 'PanelController@show')->name("show-article");
    Route::post('/articles/add', 'PanelController@store');
    Route::get('/articles/update/{id}', 'PanelController@update')->name("update-article");
    Route::post('/articles/update/{id}', 'PanelController@postUpdate')->name("update-article");
    Route::get('/articles/delete/{id}', 'PanelController@delete')->name("delete-article");
});

