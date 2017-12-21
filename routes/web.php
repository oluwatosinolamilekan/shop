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



Route::get('/','ProductController@index' )->name('home');
Route::get('/product','ProductController@product');
Route::get('/productdetails','ProductController@productdetails');
Route::get('/about','ProductController@about' );
Route::get('/login','UsersController@login' );
// Route::post('/login','UserController@login' );
Route::get('/signup','RegistrationController@create');
Route::post('/signup','RegistrationController@store');
Route::get('/logout','UsersController@destroy');
Route::get('/forgetpassword','UserController@forgetpassword' );
Route::get('/cart','CartController@cart' );
Route::get('/cart','  CartController@addcart' );
Route::get('/addproduct','ShopController@addproduct' );









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
