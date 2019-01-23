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




Route::get('/', 'MapsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ambulances', 'AmbulanceController@index')->name('ambulances');
Route::post('/ambulances', 'AmbulanceController@store')->name('ambulanceCreate');
Route::get('/ambulances/create', 'AmbulanceController@create')->name('ambulanceCreate');
Route::get('/ambulances/{$id}/edit', 'AmbulanceController@edit')->name('ambulanceEdit');
Route::get('/ambulances/{$id}/delete', 'AmbulanceController@delete')->name('ambulanceDelete');


Route::group(['prefix' => 'imss'], function() {

	Route::get('/mapas', 'MapsController@index');
	Route::get('mapas/{id}', 'MapsController@show')->name('mapasShow');
 	Route::post('/mapas/buscar/{id}', 'MapsController@search')->name('buscar');
 	Route::get('/mapa/demo', 'MapsController@pintaMapa');
    });