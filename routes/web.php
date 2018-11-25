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



Auth::routes();
Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/','MountController@nampilinGambar')->name('depan');
Route::get('/mountain/{id}','MountController@showGambar')->name('gambar');
Route::get('/mountain/tickets/{id}','MountController@shopNow')->name('shop');

Route::get('/ajax/location/search','LocationController@ajaxSearch')->name('ajax.search');
Route::resource('location','LocationController');
Route::resource('mounts','MountController');
Route::resource('order','OrderController');
Route::resource('user','UserController');
