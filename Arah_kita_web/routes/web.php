<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserMobileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengelolaScanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UpdatePasswordController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\UpdateProfilController;
use App\Models\User_Mobile;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScanController;

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



Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/profil/edit', [UpdateProfilController::class, 'edit'])->name('profil.edit');
Route::put('/profil/edit', [UpdateProfilController::class, 'update']);

Route::get('/password/edit', [UpdatePasswordController::class, 'edit'])->name('password.edit');
Route::put('/password/edit', [UpdatePasswordController::class, 'update']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('auth');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/wisata', WisataController::class)->middleware('auth');
Route::resource('/user', UserMobileController::class)->middleware('auth');
Route::resource('/transaksi', TransaksiController::class)->middleware('auth');
Route::resource('/tiket', TiketController::class)->middleware('auth');



Route::get('/user/delete/{id}', [UserMobileController::class, 'delete'])->name('delete')->middleware('auth');
Route::get('/wisata/delete/{id}', [WisataController::class, 'delete'])->name('delete')->middleware('auth');
Route::get('/transaksi/delete/{id}', [TransaksiController::class, 'delete'])->name('delete')->middleware('auth');
Route::get('/tiket/delete/{id}', [TiketController::class, 'delete'])->name('delete')->middleware('auth');

// Route::get('/scan', [ScanController::class, 'index'])->name('index')->middleware('guest');
// Route::post('/scan', [ScanController::class, 'validasiQrcode'])->name('validasiQrcode')->middleware('guest');

Route::resource('/scan', PengelolaScanController::class)->except('show')->middleware('auth');
