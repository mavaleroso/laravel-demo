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
Route::get('/login', 'SpaController@login')->name('login');
Route::post('/login_request', 'SpaController@login_request');
Route::get('/logout_request', 'SpaController@logout_request');

Route::get('/', 'SpaController@index')->name('dashboard');
Route::get('/messages', 'SpaController@index')->name('messages');
Route::get('/configurations', 'SpaController@index')->name('configurations');