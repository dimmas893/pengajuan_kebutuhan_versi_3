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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/antrian', [App\Http\Controllers\AntrianController::class, 'index']);
// Route::get('/all', [App\Http\Controllers\AntrianController::class, 'all']);
// // Route::get('/antrian_cs/{antri_cs}', [App\Http\Controllers\AntrianController::class, 'antri_cs']);
Route::get('/ambil_antrial', [App\Http\Controllers\AntrianController::class, 'ambil']);
Route::post('/antrian_cs', [App\Http\Controllers\AntrianController::class, 'postantri_cs'])->name('store');
Route::get('/antrian_cs/{id}', [App\Http\Controllers\AntrianController::class, 'delete'])->name('delete');
