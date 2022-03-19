<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/satu', [CollectionController::class, 'collectionSatu']);
Route::get('/dua', [CollectionController::class, 'collectionDua']);
Route::get('/tiga', [CollectionController::class, 'collectionTiga']);
