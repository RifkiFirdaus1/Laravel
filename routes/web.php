<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::resource('/kategori', \App\Http\Controllers\KategoriController::class);
Route::resource('/barang', \App\Http\Controllers\BarangController::class);