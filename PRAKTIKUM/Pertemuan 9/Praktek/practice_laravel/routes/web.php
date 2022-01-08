<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\StudentController;

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

/** Penulisan di Laravel 7
 * Route::get('/beranda', 'myController@index');
*/

/** Penulisan di Laravel 8
 * Route::get('/beranda', [myController::class, 'index']);
*/

/** Penulisan langsung menuju ke viewnya
 * Route::view('/beranda', 'beranda');
*/

Route::get('/beranda', [MyController::class,'index']);
Route::get('/tentang', [MyController::class, 'about']);

// Jika mengakses URL mahasiswa dengan route get, maka akan diarahkan ke class StudentController dengan method index
Route::get('/mahasiswa', [StudentController::class, 'index']);

/**
 * Jika mengakses URL mahasiswa/create dengan route get, maka akan diarahkan ke class StudentController dengan method create
 * Jika mengakses URL mahasiswa/create dengan route post, maka akan diarahkan ke class StudentController dengan method store
 */
Route::get('/mahasiswa/create', [StudentController::class, 'create']);
Route::post('/mahasiswa/create', [StudentController::class, 'store']);

/**
 * Jika mengakses URL mahasiswa/{id}/edit dengan route get, maka akan diarahkan ke class StudentController dengan method edit
 * Jika mengakses URL mahasiswa/{id}/edit dengan route put, maka akan diarahkan ke class StudentController dengan method update
 */
Route::get('/mahasiswa/{id}/edit', [StudentController::class, 'edit']);
Route::put('/mahasiswa/{id}/edit', [StudentController::class, 'update']);

// Jika mengakses URL mahasiswa/{id}/delete dengan route delete, maka akan diarahkan ke class StudentController dengan method destroy
Route::delete('/mahasiswa/{id}/delete', [StudentController::class, 'destroy']);
