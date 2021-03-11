<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PostController@showView')->name('show.view');
Route::get('/home', 'PostController@showView')->name('show.view');
Route::get('/about-us', 'PostController@showView')->name('show.view');
Route::get('/news', 'PostController@news')->name('show.news');
Route::get('/news/detail/{id}', 'PostController@details')->name('show.detail');
Route::get('/main_service', 'PostController@mainService')->name('show.mainService');
Route::get('/moving_house', 'PostController@movingHouse')->name('show.movingHouse');
Route::get('/break_wall', 'PostController@breakWall')->name('show.breakWall');
Route::get('/contact', 'PostController@contactPage')->name('show.contact');


Route::get('/login-page', 'UserController@loginAdmin')->name('admin.login');
Route::post('/login-page', 'UserController@handleLogin')->name('admin.handleLogin');
Route::get('/logout-page', 'UserController@handleLogout')->name('admin.logout');

Route::group(['prefix' => 'admin-page', 'middleware' => 'admin.login'], function () {

    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/posts', 'PostController@showPost')->name('posts.index');
    Route::get('/posts/create', 'PostController@create')->name('posts.create');
    Route::post('/posts/store', 'PostController@store')->name('posts.store');
    Route::get('/posts/edit/{id}', 'PostController@edit')->name('posts.edit');
    Route::post('/posts/update/{id}', 'PostController@update')->name('posts.update');
    Route::post('/posts/destroy/{id}', 'PostController@destroy')->name('posts.destroy');

    Route::get('/users/edit', 'UserController@edit')->name('users.edit');
    Route::post('/users/update', 'UserController@update')->name('users.update');
});
