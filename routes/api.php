<?php



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('pasien/ayam', [ApiController::class, 'lihatPasien']); 
Route::get('pasien', [ApiController::class, 'lihatPasien']); 
Route::get('pasiendetail', [ApiController::class, 'lihatPasienDetail']); 
Route::get('pasien/{id}', [ApiController::class, 'detailPasien']);
Route::get('rekam', [ApiController::class, 'lihatRekam']);

Route::post('pasien/create', [ApiController::class, 'store']);
Route::patch('pasien/update/{id}', [ApiController::class, 'update']); 
Route::delete('pasien/delete/{id}', [ApiController::class, 'delete']); 

