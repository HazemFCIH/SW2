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

Route::get('/add-movie', 'MovieController@add_movies')->name('add-movie');
Route::get('/add_category', 'CategoryController@add_category')->name('add_category');
Route::get('/list_category','CategoryController@list_category_p')->name('list_category');
Route::get('/list_movie', 'MovieController@list_movie')->name('list_movie');
Route::get('/list_user', 'UserController@list_user')->name('list_user');
Route::get('/edit_category/{id}','CategoryController@edit_category')->name('edit_category');
Route::get('/edit_movie/{id}', 'MovieController@edit_movie')->name('edit_movie');
Route::get('/home/profile', 'HomeController@view_profile2')->name('profile');
Route::get('/home/delete/{id}', 'HomeController@delete')->name('delete');
Route::get('/movie', function () {
    return view('fciflix.movie');
});
Route::get('/search','MovieController@search')->name('search');

Route::get('/home/Edit_Profile/{id}', 'HomeController@Edit_Profile')->name('Edit_Profile');
//Route::get('updateU', 'HomeController@updateU')->name('Home.updateU');
//Route::post('updateU', 'HomeController@updateU')->name('Home.updateU');
//Route::patch('/home/Edit_Profile/{id}', 'HomeController@updateU')->name('Home.updateU');
Route::resource('Home', 'HomeController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('/','CategoryController');
Route::post('movie/{id}','CommentController@store');
Route::post('rating/{id}','RatingController@store');

Route::get('/movie/{id}','MovieController@viewMovie')->name("Movie.viewMovie");
Route::get('/admin/{id}','AdminController@dashboard')->name("dashboard");


///add/'.$movie->id
Route::post('addmovie/{id}','HomeController@addmovie');
//Route::post('movie/{id}','HomeController@add');
//Route::post('movie/{id}','CommentController@store');

Route::get('storeM', 'MovieController@storeM')->name("Movie.storeM");
Route::post('storeM', 'MovieController@storeM')->name("Movie.storeM");
Route::get('store','CategoryController@store')->name("Category.store");
Route::post('store','CategoryController@store')->name("Category.store");
Route::get('update','CategoryController@update')->name("Category.update");
Route::post('update','CategoryController@update')->name("Category.update");
Route::patch('/edit_category/{id}', 'CategoryController@update')->name('Category.update');
Route::get('updateM','MovieController@updateM')->name("Movie.updateM");
Route::post('updateM','MovieController@updateM')->name("Movie.updateM");
Route::patch('/edit_Movie/{id}', 'MovieController@updateM')->name('Movie.updateM');

//Route::resource('category', 'CategoryController');
Route::resource('Movie', 'MovieController');
Route::resource('Category', 'CategoryController');
Route::resource('User', 'UserController');
/*Route::get('admin', functiMon () {
    return redirect('admin/dashboard');
});*/
