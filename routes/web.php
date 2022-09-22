<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResepsionisController;

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

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('admin', [AdminController::class, 'index'])->name('admin');
    });
    Route::group(['middleware' => ['cek_login:resepsionis']], function () {
        Route::get('resepsionis', [ResepsionisController::class, 'index'])->name('resepsionis');
    });
    Route::group(['middleware' => ['cek_login:tamu']], function () {
        Route::get('tamu', [TamuController::class, 'index'])->name('tamu');
    });
});

Route::get('/create-kamar', [AdminController::class, 'create']);
Route::post('/save-kamar', [AdminController::class, 'store'])->name('simpan-kamar');

Route::get('/edit-kamar/{id}', [AdminController::class, 'edit']);
Route::put('update-kamar/{id}', [AdminController::class, 'update'])->name('update-kamar');