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

route::get('tampil', 'tampilController@tampil')->name('tampil');
//route::get('test_db','tampilController@test_db')->name('test_db');
route::get('admin','tampilController@admin');
route::get('test_db','tampilControllers@test_db')->name('test_db');
route::get('tabeluser','tampilController@tabeluser')->name('tabeluser');
route::get('tabeladmin','tampilController@tabeladmin')->name('tabeladmin');

Route::put('create_database','userController@create')->name('tambah');
Route::put('test_update/{user_id}','userController@update')->name('update');
Route::delete('test_delete/{user_id}','userController@delete')->name('delete');

Route::put('create_database','connectController@create')->name('tambah');
Route::put('test_update/{admin_id}','connectController@update')->name('update');
Route::delete('test_delete/{admin_id}','connectController@delete')->name('delete');