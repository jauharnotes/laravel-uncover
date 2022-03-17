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
use App\Http\Controllers\Admin\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/mahasiswa', [PageController::class, 'tampil']);
Route::get('/coba-facade', [PageController::class, 'cobaFacade']);
