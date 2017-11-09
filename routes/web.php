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

Route::get('/', function () {
    return view('welcome');
});	


Route::get('login', 'AuthController@tampil_login')->name('login');
Route::post('proses_login', 'AuthController@login')->name('proses_login');
Route::get('register', 'AuthController@register')->name('register');
Route::post('proses_register', 'AuthController@proses_register')->name('proses_register');

Route::middleware(['auth'])->group(function () {

	Route::get('home','UserController@tampil_home')->name('view_home');
   	Route::get('tambah_member', 'UserController@tampil_view')->name('datamember');
	Route::get('/edit_member/{id}', 'UserController@baca_edit_view');
	Route::post('member', 'UserController@new_member');
	Route::post('edit_member', 'UserController@simpan_edit_member');
	Route::get('delete/{id}', 'UserController@delete_member')->name('deletemember');


	Route::get('products','ProductController@tampil_view')->name('products');
	Route::post('proses_daftar_buku','ProductController@proses_products')->name('proses_products');


	Route::get('cek_session','ProductController@cek_session')->name('cek_session');

	Route::get('log_out','AuthController@logout')->name('logout');
});

/*Route::get('datamember', 'UserController@data_member')->name('datamember');


Route::get('edit/{id}', 'UserController@edit_member')->name('deletemember');*/