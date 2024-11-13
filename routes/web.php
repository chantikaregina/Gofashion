<?php

use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [UserLoginController::class, 'login'])->name('login');
    Route::post('/login', [UserLoginController::class, 'auth'])->name('auth');
});

Route::middleware(['user'])->group(function () {
    Route::get('/admin/dashboard', [UserController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [UserController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/profile', [UserController::class, 'profile'])->name('admin.profile');
    Route::get('/admin/product', [ProductController::class, 'product'])->name('admin.product');
});

Route::get('/', [HomeController::class, 'home'])->name('home');
