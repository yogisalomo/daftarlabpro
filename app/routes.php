<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@getHome');

//Labpro Numpang Buat Form
Route::get('/daftarlabpro', 'HomeController@getFormDaftar');
Route::get('berhasildaftar', 'HomeController@getSuccessDaftar');
Route::post('/daftarlabpro', 'HomeController@postFormDaftar');

