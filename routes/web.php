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

Route::get('/details', 'HomeController@details')->name('details');
Route::post('/estimate', 'HomeController@estimate')->name('estimate');
Route::get('/price', 'HomeController@price')->name('price');
Route::post('/order', 'HomeController@order')->name('order');
Route::get('/thank-you', 'HomeController@thankYou')->name('thank-you');
Route::get('/', 'HomeController@index');
