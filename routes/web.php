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

Route::get('/', function () {
    return view('welcome');
});
// namespace: folder name
// prefix: url
// name: route name
Route::namespace('App\Http\Controllers\Dashboard')->name('dashboard.')->prefix('admin')->group(function(){
    Route::get('/','DashboardController@index');
    Route::resource('books','BookController');
    Route::resource('authors','AuthorController');
    Route::resource('categories','CategoryController');
    Route::resource('publishers','PublisherController');
    Route::resource('book-loans','BookLoanController');
});

Route::namespace('App\Http\Controllers\Frontsite')->name('frontsite.')->group(function(){
    Route::view('/','frontsite.home')->name("home");
});
