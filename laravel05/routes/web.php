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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [\App\Http\Controllers\PageController::class, 'index']);
// Route::get('/mahasiswa', [\App\Http\Controllers\PageController::class, 'tampil']);

// opsi penulisan routes
// use App\Http\Controllers\Admin\PageController;

// Route::get('/', [PageController::class, 'index']);
// Route::get('/mahasiswa', [PageController::class, 'tampil']);
// Route::get('/coba-facade', [PageController::class, 'cobaFacade']);
// Route::get('/coba-class', [PageController::class, 'cobaClass']);
// Route::get('/say-hello', [PageController::class, 'sayHi']);

use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswa', [MahasiswaController::class, 'mahasiswa'])->name('mahasisawa');
Route::get('/mahasiswa', [MahasiswaController::class, 'dosen'])->name('dosen');
Route::get('/mahasiswa', [MahasiswaController::class, 'galery'])->name('galery');
Route::get('/informasi/{fakultas}/{jurusan}', [MahasiswaController::class, 'info'])->name('info');
