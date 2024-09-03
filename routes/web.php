<?php

use App\Models\Rekam_medis;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RekamMedisController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('user/home');
});
Route::get('/appointment', function () {
    return view('user/appointment');
});

Route::get('/admin', function () {
    return view('home');
});
Route::get('/admin/home', function () {
    return view('home');
});
Route::get('admin/pasien', [PasienController::class, 'lihatPasien']);
Route::get('admin/detail', [PasienController::class, 'lihatPasien']);
Route::get('/admin/pasien/add', function () {
    return view('pasien/formaddpasien');
});
Route::post('admin/pasien/add/store', [PasienController::class, 'store']);
Route::get('admin/pasien/update/{id}', [PasienController::class, 'pasienParam']);
Route::post('admin/pasien/update/{id}/store', [PasienController::class, 'update']);
Route::get('admin/pasien/delete/{id}', [PasienController::class, 'delete']);


Route::get('admin/rekam', [RekamMedisController::class, 'lihatRekam_medis']);

Route::get('admin/rekam/add', [RekamMedisController::class, 'formadd']);
Route::post('admin/rekam/add/store', [RekamMedisController::class, 'store']);
Route::get('admin/rekam/update/{id}', [RekamMedisController::class, 'formupdate']);
Route::post('admin/rekam/update/{id}/store', [RekamMedisController::class, 'update']);
Route::get('admin/rekam/delete/{id}', [RekamMedisController::class, 'delete']);
Route::get('/dokter/rekam', function () {
    return view('dokter/rekammedis');
});
