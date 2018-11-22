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

Route::get('/', 'graphController@create');

Route::get('/login', 'bioController@index'); 

Route::post('/form', 'bioController@store');
Route::get('/form', 'bioController@index');

Route::get('/graficos','graphController@index');

Route::get('/avisolegal', function(){
    return view('avisolegal');
});
Route::get('/cookies', function(){
    return view('cookies');
});

/* PROVISIONAL */
Route::get('/contacto', function(){
    return view('contacto');
});