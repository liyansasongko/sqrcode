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

Route::get('/', 'Qrcode\FrontendController@index')->name('frontend.qrcode.index');
Route::post('/create', 'Qrcode\FrontendController@create')->name('frontend.qrcode.create');
