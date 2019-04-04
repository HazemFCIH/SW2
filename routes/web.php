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
    return view('fciflix.home');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
/*Route::get('/add-movie', function () {
    return view('admin.add-movie');
});*/
//Route::get('add-movie', ['as' => 'add-movie', 'uses' => 'MovieController@add_movies']);
Route::get('/add-movie', 'MovieController@add_movies')->name('add-movie');
Route::get('/add_category', 'CategoryController@add_category')->name('add_category');


Route::get('/movie', function () {
    return view('fciflix.movie');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('/','CategoryController');

//Route::get('/movie/{id}'.'MovieController@viewMovie');
Route::get('/admin','AdminController@dashboard');

Route::get('/admin/dashboard/add_category','AdminController@add_movies');

Route::post('/admin/dashboard/add_category','AdminController@insert_category');


Route::get('/admin/dashboard/add_movies','MovieController@add_movies');

Route::post('/admin/dashboard/add_movies','MovieController@insert_movies');
/*Route::get('admin', function () {
    return redirect('admin/dashboard');
});*/
