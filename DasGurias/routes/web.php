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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('home');
Route::get('/calca', 'HomeController@calca')->name('calca');
Route::get('/vestido', 'HomeController@vestido')->name('vestido');
Route::get('/blusa', 'HomeController@blusa')->name('blusa');