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

Route::get('/kasir', [KasirController::class, 'index'])->name('kasir');
Route::get('/manajer', [ManajerController::class, 'index'])->name('manajer');