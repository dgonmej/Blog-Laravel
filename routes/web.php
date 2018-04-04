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

// Route::prefix('admin')->group(function () {
//     Route::resource('users', 'UsersController', ['except' => 'show']);
//     Route::resource('categories', 'CategoriesController', ['except' => 'show']);
// });

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::resource('users', 'UsersController', ['except' => 'show']);
        Route::resource('categories', 'CategoriesController', ['except' => 'show']);
    });
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
