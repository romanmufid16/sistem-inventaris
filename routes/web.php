<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authentication;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenjualanController;


Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('index');
    } else {
        return redirect()->route('loginPage');
    }
});

Route::get('/login',[AuthController::class, 'loginPage'])->name('loginPage');
Route::post('/login',[AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'registerPage'])->name('registerPage');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware([Authentication::class])->group(function (){
    Route::prefix('dashboard')->group(function (){
        Route::resource('kategori', KategoriController::class);
        Route::resource('produk', ProdukController::class);
        Route::resource('penjualan', PenjualanController::class);
        Route::get('', [DashboardController::class, 'index'])->name('index');
    });
});