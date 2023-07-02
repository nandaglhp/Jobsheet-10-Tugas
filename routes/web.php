<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;

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

Route::resource('mahasiswa', MahasiswaController::class);

Route::get('/nilai/{Nim}', [MahasiswaController::class, 'nilai']);
Route::resource('articles', ArticleController::class);
Route::get('/article/cetak_pdf',[ArticleController::class, 'cetak_pdf']);
Route::get('/nilai/{Nim}',[MahasiswaController::class, 'cetak_pdf'])->name('mahasiswa.cetak_pdf');
