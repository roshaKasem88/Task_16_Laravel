<?php

use Illuminate\Support\Facades\Route;

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



//Route::get('register','BlogController@create');

//Route::post('save','BlogController@store_data');


Route::get('Form','FormController@create');
Route::post('save','FormController@getData');
