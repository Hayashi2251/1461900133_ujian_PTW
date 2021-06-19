<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','LaporanController@index')->name('laporan');
Route::get('/tambah', 'LaporanController@tambah')->name('laporan.tambah');
Route::get('/edit/{id}', 'LaporanController@edit')->name('laporan.edit');
Route::post('/proses', 'LaporanController@store')->name('laporan.store');
Route::post('/hapus/{id}', 'LaporanController@destroy')->name('laporan.hapus');
Route::post('/update/{id}', 'LaporanController@update')->name('laporan.update');
Route::get('/ekspor','LaporanController@export_excel')->name('laporan.ekspor');