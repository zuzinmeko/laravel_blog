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

 Route::get('/','MainController@home')->name('welcome');

// Route::get('service','MainController@service')->name('servicepage');

// working with bootstrap tramplate

	Route::get('/home','MyController@home')->name('home');

	Route::get('rental','MyController@rental')->name('rental');

 	Route::get('service','MyController@service')->name('service');

 	Route::get('agency','MyController@agency')->name('agency');

 	Route::get('about','MyController@about')->name('about');

 	Route::get('contact','MyController@contact')->name('contact');

 	//CRUD  For student table
 	Route::resource('student','StudentController');

 