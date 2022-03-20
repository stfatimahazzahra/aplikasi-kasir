<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\ManajerController;

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
    return redirect(route('login'));
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authanticate']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/create', [AdminController::class, 'create']);
Route::post('/admin/user', [AdminController::class, 'user']);
Route::get('/admin/edit/{id}', [AdminController::class, 'edit']);
Route::post('/admin/update/{id}', [AdminController::class, 'update']);
Route::get('/admin/delete/{id}', [AdminController::class, 'delete']);

Route::get('/kasir', [KasirController::class, 'index'])->name('kasir');
Route::get('/kasir/create', [KasirController::class, 'create']);
Route::post('/kasir/transaksi', [KasirController::class, 'transaksi']);

Route::get('/manajer', [ManajerController::class, 'index'])->name('manajer');
Route::get('/manajer/create', [ManajerController::class, 'create']);
Route::post('/manajer/menu', [ManajerController::class, 'menu']);
Route::get('/manajer/edit/{id}', [ManajerController::class, 'edit']);
Route::post('/manajer/update/{id}', [ManajerController::class, 'update']);
Route::get('/manajer/delete/{id}', [ManajerController::class, 'delete']);