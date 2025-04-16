<?php

use App\Http\Controllers\EdicionProductos;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('Bienvenido');
})->name('productos.Bienvenido');
Route::middleware([Authenticate::class])->group(function () {
    Route::get('/productos', [EdicionProductos::class, 'index'])->name('productos.index');
    Route::get('/productos/create', [EdicionProductos::class, 'create'])->name('productos.create');
    Route::post('/productos', [EdicionProductos::class, 'store'])->name('productos.store');
    Route::get('/productos/{id}/edit', [EdicionProductos::class, 'edit'])->name('productos.edit');
    Route::put('/productos/{id}', [EdicionProductos::class, 'update'])->name('productos.update');
    Route::delete('/productos/{id}', [EdicionProductos::class, 'destroy'])->name('productos.destroy');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

