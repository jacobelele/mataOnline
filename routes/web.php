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
Route::get('/inputData','LokasiController@inputData');
Route::get('/getData','LokasiController@getData');
Route::get('/getBidang', 'LokasiController@getBidang')->name('bidang');
Route::get('/getTabulasi', 'LokasiController@getTabulasi')->name('tabulasi');
Route::get('/viewDyn/{id}', 'LokasiController@viewDyn')->name('viewTab');
Route::get('/getTable/{idTab}/{kelId}/{thn}','LokasiController@getTable')->name('tables');
// Route::get('/getTable/{idTab}/{kel}','LokasiController@getTable')->name('tables');

Route::post('/postData', 'PostController@store')->name('storeBidang');
Route::get('/editData/{idTab}/{id}', 'LokasiController@show')->name('showBidang');
Route::post('/editData', 'PostController@edit')->name('editData');
Route::delete('/deleteData/{idTab}/{id}', 'LokasiController@delete')->name('delete.data');

Route::get('/getProvinsi', 'LokasiController@getProvinsi')->name('provinsi');
Route::get('/getKota/{id}', 'LokasiController@getKota')->name('kota');
Route::get('/getKecamatan/{id}', 'LokasiController@getKecamatan')->name('kecamatan');
Route::get('/getKelurahan/{id}', 'LokasiController@getKelurahan')->name('kelurahan');

//download
Route::get('send','LokasiController@sendData');
Route::post('test','LokasiController@pdf')->name('tesPdf');

//user
Route::resource('user','UserController');
Route::get('user/{id}','UserController@index');
Route::get('/getUser','UserController@getUser');
