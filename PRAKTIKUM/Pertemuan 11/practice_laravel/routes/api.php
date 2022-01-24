<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Menampilkan data mahasiswa melalui API
/**
 * Jika mengakses URL mahasiswa dengan route get, maka akan diarahkan ke class studentApiController, method index, nama route student.index
 * Jika mengakses URL mahasiswa/{id} dengan route get, maka akan diarahkan ke class studentApiController, method getById
 * Jika mengakses URL mahasiswa/by_nim/{nim} dengan route get, maka akan diarahkan ke class studentApiController, method getByNIM
 */
Route::get('/mahasiswa', [studentApiController::class, 'index']) -> name('index.api');
Route::get('/mahasiswa/{id}', [studentApiController::class, 'getById']);
Route::get('/mahasiswa/by_nim/{nim}', [studentApiController::class, 'getByNIM']);

// Menambah data mahasiswa melalui API
Route::post('/mahasiswa', [studentApiController::class, 'save']);

// Mengubah data mahasiswa melalui API
Route::put('/mahasiswa/{id}', [studentApiController::class, 'update']);

// Menghapus data mahasiswa melalui API
Route::delete('/mahasiswa/{id}', [studentApiController::class, 'delete']);
