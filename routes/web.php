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

Route::group([
    'prefix' => 'instansis',  'middleware' => 'auth'
], function(){
    Route::get('/', 'InstansiController@index')->name('instansi.index');
    Route::get('create','InstansiController@create')->name('instansi.create');
    Route::post('store','InstansiController@store')->name('instansi.store');
    Route::get('{instansi}/edit', 'InstansiController@edit')->name('instansi.edit');
    Route::patch('{instansi}/edit','InstansiController@update')->name('instansi.update');
    Route::delete('{instansi}/delete','InstansiController@destroy')->name('instansi.destroy');
    Route::get('/search', 'InstansiController@search')->name('instansi.search');
});