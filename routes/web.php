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
    Route::post('save', 'ActivityController@store')->name('backend.kegiatan.save');
    Route::get('tampil-formEdit/{activity}', 'ActivityController@edit')->name('backend.kegiatan.edit');
    Route::patch('Update/{activity}', 'ActivityController@update')->name('backend.kegiatan.update');

    
});

Route::Group(['prefix' => 'users'], function(){
    Route::get('index', 'User\UserController@index')->name('users');
    Route::get('index', 'Kegiatan\KegiatanController@index')->name('users.Kegiatan.index');

});

Route::group(['prefix'=> 'registers'], function(){
    Route::get('index','Register\RegisterController@index')->name('backend.registers.index');
    Route::get('ambil-formulir', 'Register\RegisterController@create')->name('backend.registers.create');
    Route::get('show-register','Register\RegisterController@show')->name('backend.registers.show');
});