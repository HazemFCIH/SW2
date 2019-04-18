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
Route::get('/list_category','CategoryController@list_category_p')->name('list_category');
Route::get('/list_movie', 'MovieController@list_movie')->name('list_movie');
Route::get('/edit_category/{id}','CategoryController@edit_category')->name('edit_category');
Route::get('/edit_movie/{id}', 'MovieController@edit_movie')->name('edit_movie');

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

Route::get('/movie/{id}','MovieController@viewMovie')->name("Movie.viewMovie");
Route::get('/admin','AdminController@dashboard');


Route::get('storeM', 'MovieController@store')->name("Movie.storeM");
Route::post('storeM', 'MovieController@store')->name("Movie.storeM");
Route::get('store','CategoryController@store')->name("Category.store");
Route::post('store','CategoryController@store')->name("Category.store");
Route::post('edit_category','CategoryController@edit_category')->name("Category.edit_category");
/*Route::get('admin', function () {
    return redirect('admin/dashboard');
});*/
