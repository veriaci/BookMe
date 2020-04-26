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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/blogDetails', 'PagesController@blogDetails');
Route::get('/blog', 'PagesController@blog');
Route::get('/cart', 'PagesController@cart');
Route::get('/checkout', 'PagesController@checkout');
Route::get('/contact', 'PagesController@contact');
Route::get('/error404', 'PagesController@error404');
Route::get('/faq', 'PagesController@faq');
Route::get('/portfolioDetails', 'PagesController@portfolioDetails');
Route::get('/portfolio', 'PagesController@portfolio');
Route::get('/shopGrid', 'PagesController@shopGrid');
Route::get('/singleProduct', 'PagesController@singleProduct');
Route::get('/team', 'PagesController@team');
Route::get('/wishlist', 'PagesController@wishlist');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
