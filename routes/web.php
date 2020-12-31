<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


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

Route::get('register',  "App\Http\Controllers\AuthController@register")->name("register");
Route::post('register',  "App\Http\Controllers\AuthController@do_register")->name("do_register");
Route::get('login',  "App\Http\Controllers\AuthController@login")->name("login");
Route::post('authenticate',  "App\Http\Controllers\AuthController@authenticate")->name("authenticate");
Route::get('logout',  "App\Http\Controllers\AuthController@logout")->name("logout");

// namespace: folder name
// prefix: url
// name: route name
Route::namespace('App\Http\Controllers\Dashboard')->middleware("auth")->name('dashboard.')->prefix('admin')->group(function(){
    Route::get('/','DashboardController@index')->name("home");
    Route::resource('books','BookController');
    Route::resource('authors','AuthorController');
    Route::resource('categories','CategoryController');
    Route::resource('publishers','PublisherController');
    Route::resource('book-loans','BookLoanController');
});

Route::namespace('App\Http\Controllers\Frontsite')->name('frontsite.')->group(function(){
    Route::get('/','FrontsiteController@index')->name("home");
});
