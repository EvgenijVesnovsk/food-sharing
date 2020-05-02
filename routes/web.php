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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'Pages\HomePageController@index')->name('home');

Route::get('/category/{category}', 'ProductCardsController@listByCategory')->name('category.list');
Route::get('/product/{product}', 'ProductCardsController@show')->name('product.show');
Route::post('/product/comment', 'ProductCardsController@commentStore')->name('comment.store')->middleware('auth');

