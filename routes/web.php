<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return view('welcome');
});

//Route::get('/daftar_mahasiswa',
//'App\Http\Controllers\MahasiswaController@index');

Route::get('/daftar_mahasiswa', [MahasiswaController::class, 'index']);
//Route::post('/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);
//Route::match(['get', 'post'], '/detail_mahasiswa',
//[MahasiswaController::class, 'detail_mhs']);
Route::view('/detail_mahasiswa', 'detail_mahasiswa');
Route::get('/admin/dashboard', [AdminController::class, 'index']);
Route::get('/admin/biodata', [AdminController::class, 'show_biodata']);
Route::get('/admin/aboutme', [AdminController::class, 'show_aboutme']);
Route::get('/admin/pendidikan', [AdminController::class, 'show_pendidikan']);
Route::get('/admin/daftar', [AdminController::class, 'show_daftar']);
Route::get('/admin/card', [AdminController::class, 'show_card']);