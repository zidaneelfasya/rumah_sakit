<?php

use App\Models\Rekam_medis;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RekamMedisController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('home');
});
Route::get('/admin/home', function () {
    return view('home');
});
Route::get('admin/pasien', [PasienController::class, 'lihatPasien']);
Route::get('admin/detail', [PasienController::class, 'lihatPasien']);
Route::get('/admin/pasien/form', function () {
    return view('formaddpasien');
});
Route::post('admin/pasien/form/store', [PasienController::class, 'store']);
Route::get('admin/rekam', [RekamMedisController::class, 'lihatRekam_medis']);