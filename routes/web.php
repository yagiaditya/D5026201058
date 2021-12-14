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

Route::get('tugas4', function () {
    return view('tugas4js');
});

Route::get('praktikum2', function () {
    return view('praktikum2form');
});
// Route::get('ets2021', function () {
//     return view('ets');
// });

//melalui controller
Route::get('ets2021',"ViewController@showETS");

//TabelPegawai
Route::get('greetings',"ViewController@showGreetings");
Route::post('sayhi',"ViewController@sayHi");
Route::post('tugasphp',"ViewController@showphp");
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

//TabelTugas
Route::get('/tugas','TugasController@index');
Route::get('/tugas/tambah','TugasController@tambah');
Route::post('/tugas/store','TugasController@store');
Route::get('/tugas/edit/{id}','TugasController@edit');
Route::post('/tugas/update','TugasController@update');
Route::get('/tugas/hapus/{id}','TugasController@hapus');

Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

Route::get('/tumbuhan','TumbuhanController@index');
Route::get('/tumbuhan/cari','TumbuhanController@cari');
Route::get('/tumbuhan/tambah','TumbuhanController@tambah');
Route::post('/tumbuhan/store','TumbuhanController@store');
Route::get('/tumbuhan/edit/{id}','TumbuhanController@edit');
Route::post('/tumbuhan/update','TumbuhanController@update');
Route::get('/tumbuhan/hapus/{id}','TumbuhanController@hapus');
Route::get('/tumbuhan/detail/{id}','TumbuhanController@view');
