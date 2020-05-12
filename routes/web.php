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

Route::get('/home', 'PagesController@home');
Route::get('/welcome', 'PagesController@welcome');
Route::get('/profile page', 'PagesController@profile');
Route::get('/web', 'PagesController@web');
Route::get('/programming', 'PagesController@programming');
Route::get('/languages', 'PagesController@languages');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/viewallusers', 'UsersController@viewallusers');
Route::get('/viewallcourses', 'CoursesController@viewallcourses');
Route::resource('users','UsersController');
Route::resource('course','CoursesController');

Route::get('/add',function(){
    return view('add');
});
Route::get('/edit',function(){
    return view('edit');
});
Route::get('/view',function(){
    return view('view');
});


//Route::get('/users/{id}/edit','UsersController@edit');
//Route::put('/users/{id}','UsersController@update');

Auth::routes();

Route::get('/logout',function(){
    Auth::logout();
    return view('/welcome');
});


Route::get('/home', 'HomeController@index')->name('home');
//Route::post('/register','UsersController@store');
