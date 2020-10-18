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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=> 'activity'], function(){
    Route::get('index', 'ActivityController@index')->name('backend.kegiatan.index');

    Route::get('create','ActivityController@create')->name('backend.kegiatan.create');
    Route::get('tampil-formEdit', 'activityController@edit')->name('backend.kegiatan.edit');

});

Route::group(['prefix'=> 'users'], function(){
    Route::get('index','user\Usercontroller@index')->name('users');

});

Route::group(['prefix'=> 'registers'], function(){
    Route::get('index','register\registerController@index')->name('registers');
    Route::get('ambil-formulir', 'register\tegistersController@create')->name('registers.ambil-formulir');

});

