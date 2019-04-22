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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/', 'HomeController@home');
Route::get('/sign', 'HomeController@sign');
Route::get('/StartupDash', 'HomeController@StartupDash');
Route::get('/StartupProfile', 'HomeController@StartupProfile');
Route::get('/create', 'HomeController@create');
*/



Route::get('/','PagesController@index');
Route::get('/sign', 'PagesController@sign');
Route::get('/StartupDash', 'PagesController@StartupDash');
//Route::get('/create', 'PagesController@create');
//Route::get('/posts/StartupProfile', 'PagesController@StartupProfile');

Route::resource('posts', 'PostsController');

/*
Route::get('/sign', function () {
    return view('sign');
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
