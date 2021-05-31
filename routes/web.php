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

Route::get('/','LoginController@menu'); 

//insert
Route::get('/lgn','LoginController@create');  //@create dari nama function di LoginController
Route::post('/stores','LoginController@store'); 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/list','ListingController@create');
Route::post('/listing', 'ListingController@listing');
Route::get('/catalog','ListingController@catalog');