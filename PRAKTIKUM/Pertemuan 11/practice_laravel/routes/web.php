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
 * Route::get('/beranda', ['myController@index'] -> name('index'))
*/

/** Penulisan langsung menuju ke viewnya
 * Route::view('/beranda', 'beranda');
*/

/**
 * Jika mengakses URL beranda dengan route get, maka akan diarahkan ke class MyController, method brand, view welcome
 * Jika mengakses URL beranda dengan route get, maka akan diarahkan ke class MyController, method dashboard, view dashboard
 * Jika mengakses URL tentang dengan route get, maka akan diarahkan ke class MyController, method about, view about
 */
Route::get('/', 'MyController@brand') -> name('welcome');
Route::get('/beranda', 'MyController@dashboard') -> name('dashboard');
Route::get('/tentang', 'MyController@about') -> name('about');

// Jika mengakses URL mahasiswa dengan route get, maka akan diarahkan ke class StudentController, method index, nama route student.index
Route::get('/mahasiswa', 'StudentController@index') -> name('student.index');

/**
 * Jika mengakses URL mahasiswa/create dengan route get, maka akan diarahkan ke class StudentController, method create, nama route student.create
 * Jika mengakses URL mahasiswa/create dengan route post, maka akan diarahkan ke class StudentController, method store, nama route student.store
 */
Route::get('/mahasiswa/create', 'StudentController@create') -> name('student.create');
Route::post('/mahasiswa/create', 'StudentController@store') -> name('student.store');

/**
 * Jika mengakses URL mahasiswa/{id}/edit dengan route get, maka akan diarahkan ke class StudentController, method edit, nama route student.edit
 * Jika mengakses URL mahasiswa/{id}/edit dengan route put, maka akan diarahkan ke class StudentController, method update, nama route student.update
 */
Route::get('/mahasiswa/{id}/edit', 'StudentController@edit') -> name('student.edit');
Route::put('/mahasiswa/{id}/edit', 'StudentController@update') -> name('student.update');

// Jika mengakses URL mahasiswa/delete/{id} dengan route delete, maka akan diarahkan ke class StudentController dengan method destroy
Route::delete('/mahasiswa/delete/{id}', [StudentController::class, 'destroy']);
