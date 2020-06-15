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

Route::get('/', [
    'uses' => 'PagesController@index',
    'as' => 'layouts.index'
]);
Route::get('/about', 'PagesController@about');
Route::get('/blogDetails', 'PagesController@blogDetails');
Route::get('/blog', 'PagesController@blog');
//Route::get('/cart', 'PagesController@cart');
//Route::get('/checkout', 'PagesController@checkout');
Route::get('/contact', 'PagesController@contact');
Route::get('/error404', 'PagesController@error404');
Route::get('/faq', 'PagesController@faq');
Route::get('/portfolioDetails', 'PagesController@portfolioDetails');
Route::get('/portfolio', 'PagesController@portfolio');
Route::get('/shopGrid', 'PagesController@shopGrid');
//Route::get('/singleProduct', 'PagesController@singleProduct');
Route::get('/team', 'PagesController@team');
Route::get('/wishlist', 'PagesController@wishlist');
Route::get('/howto', 'PagesController@howto');
Route::get('/history', 'PagesController@history');
Route::get('/contribute', 'PagesController@submit');
Route::post('/contributed', 'PagesController@submit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('single', 'SingleController');
Route::get('/singleProduct/{id}', [
    'uses' => 'PagesController@show',
    'as' => 'single.product'
]);

Route::get('/rent/{id}', [
    'uses' => 'ProductController@postRent',
    'as' => 'product.rent',
    'middleware' => 'auth'
]);

Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('/reduce/{id}', [
    'uses' => 'ProductController@getReduceByOne',
    'as' => 'product.reduceByOne'
]);

Route::get('/remove/{id}', [
    'uses' => 'ProductController@getRemoveItem',
    'as' => 'product.remove'
]);

Route::get('/shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);

Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

Route::post('/checkout', [
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);
