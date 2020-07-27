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

Route::group(['middleware' => 'auth'], function() {
    Route::resource('jurusans', 'JurusanController');
    Route::resource('kelas', 'KelasController');
    Route::resource('guruMapels', 'Guru_MapelController');
    Route::resource('siswas', 'SiswasController');
    Route::resource('raports', 'RaportController');
    Route::resource('prodis', 'ProdiController');
    Route::resource('semesters', 'SemesterController');
    Route::resource('users', 'UserController');
    Route::resource('matapelajarans', 'MatapelajaranController');
    Route::resource('walikelas', 'WalikelasController');
});

Route::resource('roles', 'RoleController');

Route::resource('guruMapels', 'Guru_MapelController');

Route::resource('gurus', 'GuruController');