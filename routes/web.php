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

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/company', 'StaticPagesController@company')->name('company');
Route::resource('articles', 'ArticlesController');
Route::resource('products', 'ProductsController');
Route::get('/album', 'StaticPagesController@album')->name('album');
Route::get('/download', 'StaticPagesController@download')->name('download');
Route::get('/message', 'StaticPagesController@message')->name('message');
Route::post('/message','StaticPagesController@messages_upload')->name('messages_upload');
Route::get('/contact', 'StaticPagesController@contact')->name('contact');



