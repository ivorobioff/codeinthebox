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

Route::get('/products/web-application', 'WebApplicationProductController@show')->name('products.web-application');
Route::post('/products/web-application/estimate', 'WebApplicationProductController@estimate')->name('products.web-application.estimate');
Route::get('/products/web-application/price', 'WebApplicationProductController@price')->name('products.web-application.price');
Route::post('/products/web-application/order', 'WebApplicationProductController@order')->name('products.web-application.order');
Route::get('/thank-you', 'HomeController@thankYou')->name('thank-you');
Route::get('/', 'HomeController@index');
