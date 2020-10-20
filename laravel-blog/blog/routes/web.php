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

Route::get('/', 'pagesController@home' );

//admin route işlemleri
Route::post('/kayit','adminController@kayit')->name('kayit');
Route::post('/giris','adminController@giris');
Route::get('/index', 'adminController@index' );
Route::get('/logout','adminController@logout');

//ürün ekle route
Route::post('/urun_ekle','pagesController@urun_ekle')->name('urun_ekle');

