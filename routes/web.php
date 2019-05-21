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

Route::get('/index', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('login');
});


Route::get('/admin', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});



Route::get('/admin/dashboard/reg', function () {
    return view('admin.regist');
});

Route::get('/calon', function () {
    return view('calon');
});

//route CRUD
Route::get('/pemilih','PemilihController@index');
Route::get('/pemilih/tambah','PemilihController@tambah');
Route::post('/pemilih/store','PemilihController@store');
Route::get('/pemilih/edit/{nik}','PemilihController@edit');
Route::post('/pemilih/update','PemilihController@update');
Route::get('/pemilih/hapus/{nik}','PemilihController@hapus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
