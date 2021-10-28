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


// Route::get('Blog','BlogController@create');
//  Route::post('save','BlogController@store_Data');
//  Route::post('read','BlogController@Display');
//  Route:get('display','adminsController@index');
// //Method resource in resource controller only one route for crud system
//  Route::resource('Admins','adminsController');->;

//Admins            GET    = Route::get('Admins','adminsController@index');
//Admins/create      Get     = Route::get('Admins/create','adminsController@create');
//Admins            POST     = Route::post('Admins','adminsController@store');
//Admins/{id}/edit  Get      =  Route::get('Admins/{id}/edit','adminsController@edit');
//Admins{id}        put      = Route::put('Admins/{id}','adminsController@update');
//Admins{id}       DELETE    = Route::get('Admins/{id}','adminsController@destroy');
//Admins{id}        GET      = Route::get('Admins/{id}','adminsController@show');



  // Route::resource('Blog','resourceController');

   Route::get('users/Login','resourceController@LoginView');
   Route::post('users/DoLogin','resourceController@Login');
   Route::get('users/logout','resourceController@LogOut');
   
   Route::resource('users','resourceController');

  Route::resource('tasks','tasksController');
