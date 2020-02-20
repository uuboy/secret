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



Auth::routes();
Route::get('/', 'PagesController@encryptCreate')->name('encryptCreate');
Route::get('decrypt', 'PagesController@decryptCreate')->name('decryptCreate');

Route::post('word_encode', 'PagesController@wordEncode')->name('wordEncode');
Route::post('word_decode', 'PagesController@wordDecode')->name('wordDecode');
