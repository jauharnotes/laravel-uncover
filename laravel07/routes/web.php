<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/', [MahasiswaController::class, 'index']);
Route::get('/insert-sql', [MahasiswaController::class, 'insertSql']);
Route::get('/insert-timestamp', [MahasiswaController::class, 'insertTimestamp']);
Route::get('/insert-prepared', [MahasiswaController::class, 'insertPrepared']);
Route::get('/insert-binding', [MahasiswaController::class, 'insertBinding']);
Route::get('/update', [MahasiswaController::class, 'update']);
Route::get('/delete', [MahasiswaController::class, 'delete']);
Route::get('/select', [MahasiswaController::class, 'select']);
Route::get('/select-tampil', [MahasiswaController::class, 'selectTampil']);
Route::get('/select-view', [MahasiswaController::class, 'selectView']);
Route::get('/select-where', [MahasiswaController::class, 'selectWhere']);
Route::get('/statement', [MahasiswaController::class, 'statement']);
