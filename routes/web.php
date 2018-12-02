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

Route::get('/', 'bioController@index');
Route::get('/login', 'bioController@index'); 
Route::post('/form', 'bioController@store');
Route::get('/form', 'graphController@create');
Route::post('/form2', 'graphController@store');
Route::get('/graficos','graphController@index');
Route::get('/logout', 'bioController@logout');
Route::get('/contacto', 'bioController@index');
Route::get('/avisolegal', 'bioController@index');
Route::get('/cookies', 'bioController@index');
Route::get('/perfil', 'bioController@index');

Route::post('/contacto-form', 'bioController@storeContacto');