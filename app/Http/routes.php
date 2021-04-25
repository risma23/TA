<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/dashboard','TAController@index');
Route::get('/home','TAController@home');
Route::get('/absensi','AbsensiController@absensi');
Route::get('/pegawai','TAController@pegawai');
Route::get('/rinciangaji','BuktiLaporanController@index');
Route::get('/transgaji','TAController@transgaji');
Route::get('/cetakgaji','CetakGajiController@index');
Route::get('/tambahabsensi','TAController@tmbhabsensi');
Route::get('/tambahabsensi','AbsensiController@tmbhabsensi');

Route::get('/tampilpegawaiabsen','PegawaiAbsenController@index');
Route::get('/tampilpegawaiabsen/hapus/{id}','PegawaiAbsenController@destroy');
Route::get('/tampilpegawaiabsen/edit/{id}','PegawaiAbsenController@edit');
Route::get('/tampilpegawaiabsen/tambah','PegawaiAbsenController@create');
Route::post('/tampilpegawaiabsen/store','PegawaiAbsenController@store');

Route::get('/tampilgajipegawai','GajiHonorerController@index');
Route::get('/inputgaji','GajiHonorerController@create');
Route::post('/tampilgajipegawai/store','GajiHonorerController@store');
