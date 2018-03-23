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
Route::get('/items','NavController@show');
Route::get('/insertInstrument', 'NavController@insertInstrument');

Route::post('/updateInstrument', 'NavController@updateInstrument');
Route::post('/insertInstrumentAction', 'ActionController@insertInstrumentAction');
Route::post('/deleteInstrumentAction', 'ActionController@deleteInstrumentAction');
Route::post('/updateInstrumentAction', 'ActionController@updateInstrumentAction');
