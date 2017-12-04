<?php
use App\User;
use App\Http\Controllers;
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
//Route::get('adminPanel', 'AdminPagesController@page'); //Здесь не на что смотреть, просто проходим мимо
Route::get('admin', function(){
    if ((Auth::check()) && (Auth::user()->HasRole(Auth::user()->role))) {
        $usersList = User::all()->where("role", "<>", "admin");
        $houses = \App\PublishingHouse::all();
        return view('admin.admin_authorization', compact(['usersList', 'houses']));//redirect()->action('AdminPagesController@index');
    }
    else
        return redirect()->action('mainPageController@index');
});
Route::get('/', 'mainPageController@index');
Route::get('main', 'mainPageController@index');
Route::get('home', 'mainPageController@index');
Route::get('education', 'PagesController@education');
Route::get('showaddpubl', 'PagesController@showFormToAddPublication');
Route::get('science', 'PagesController@science');
Route::get('contacts', 'PagesController@contacts');
Route::get('authorization', 'PagesController@authorization');
Route::get('account', 'PagesController@account')
    ->middleware('auth')->name('account');
Auth::routes();

Route::post('/profile', 'mainPageController@updateImage')->middleware('auth');

Route::get('/notAllow', 'HomeController@index')->name('home');

Route::post('/addpublication', 'PagesController@addpublication');
Route::post('/adduser', 'AdminPagesController@addUser');
Route::post('/addPubl', 'AdminPagesController@addPublic');
Route::get('/admin/user/{id}', 'AdminPagesController@deleteUser');
Route::get('/admin/publish/{id}', 'AdminPagesController@deletePublic');

Route::get('/user/publish/{id}', 'mainPageController@deletePublic');
Route::resource('editor', 'editController');
