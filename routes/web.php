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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'barang'], function(){
    Route::get('index', 'BarangController@index')->name('barang.index');

    Route::get('create', 'BarangController@create')->name('barang.create');
});

Route::group(['prefix' => 'dashboard'], function(){
    Route::get('index', 'DashboardController@index')->name('dashboard.index');

});

Route::group(['prefix' => 'stocks'], function(){
    Route::get('index', 'StocksController@index')->name('stocks.index');

});

Route::group(['prefix' => 'supliers'], function(){
    Route::get('index', 'SupliersController@index')->name('supliers.index');

});

Route::group(['prefix' => 'requestt'], function(){
    Route::get('index', 'RequestController@index')->name('request.index');

});
