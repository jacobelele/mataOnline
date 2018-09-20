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
Route::get('/inputData',function(){
  return view('globalInput');
});
Route::get('/getBidang', 'LokasiController@getBidang')->name('bidang');
Route::get('/getTabulasi', 'LokasiController@getTabulasi')->name('tabulasi');
Route::get('/viewDyn/{id}', 'LokasiController@viewDyn')->name('viewTab');
Route::post('/postData', 'PostController@store')->name('storeBidang');
Route::get('/getProvinsi', 'LokasiController@getProvinsi')->name('provinsi');
Route::get('/getKota', 'LokasiController@getKota')->name('kota');
Route::get('/getKecamatan', 'LokasiController@getKecamatan')->name('kecamatan');
Route::get('/getKelurahan', 'LokasiController@getKelurahan')->name('kelurahan');

Route::get('/kependudukan', function () {
    return view('kependudukan.input');
});
Route::get('/kependudukan1', function () {
    return view('kependudukan.input1');
});

Route::get('/kb', function () {
    return view('KB.input');
});

Route::get('/pembangunan_keluarga', function () {
    return view('keluarga.input');
});
Route::get('/pembangunan_keluarga1', function () {
    return view('keluarga.input1');
});

Route::get('/sipil', function () {
    return view('sipil.input');
});
Route::get('/sipil1', function () {
    return view('sipil.input2');
});
Route::get('/sipil2', function () {
    return view('sipil.input3');
});

Route::get('/kesehatan', function () {
    return view('kesehatan.input');
});
Route::get('/kesehatan1', function () {
    return view('kesehatan.input1');
});

Route::get('/pendidikan', function () {
    return view('pendidikan.input');
});
Route::get('/pendidikan1', function () {
    return view('pendidikan.input1');
});

Route::get('/ketenagakerjaan', function () {
    return view('ketenagakerjaan.input');
});
Route::get('/ketenagakerjaan1', function () {
    return view('ketenagakerjaan.input1');
});

Route::get('/perumahan', function () {
    return view('perumahan.input');
});

Route::get('/sosial', function () {
    return view('sosial.input');
});
Route::get('/sosial1', function () {
    return view('sosial.input1');
});

Route::get('/desa', function () {
    return view('desa.input');
});
Route::get('/desa1', function () {
    return view('desa.input1');
});
