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

Route::get('/', 'mainPageController@index');
Route::get('main', 'mainPageController@index');
Route::get('education', 'PagesController@education');
Route::get('science', 'PagesController@science');
Route::get('contacts', 'PagesController@contacts');
Route::get('authorization', 'PagesController@authorization');

Route::get('admin', 'AdminPagesController@admin_authorization');

Route::get('account', 'PagesController@account')
    ->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
