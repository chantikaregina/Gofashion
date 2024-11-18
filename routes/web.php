<?php

use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController as FrontendProductController;
use App\Http\Controllers\Frontend\ReviewController;
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
    Route::put('/admin/profile/update', [UserController::class, 'update'])->name('admin.profile.update');

    Route::get('/admin/product', [ProductController::class, 'product'])->name('admin.product');
    Route::get('/admin/product/tambah', [ProductController::class, 'create'])->name('admin.product.create');
    Route::post('/admin/product/tambah', [ProductController::class, 'store'])->name('admin.product.store');
    Route::get('/admin/product/edit/{id_product}', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::put('/admin/product/edit/{id_product}', [ProductController::class, 'update'])->name('admin.product.update');
    Route::get('/admin/product/delete/{id_product}', [ProductController::class, 'delete'])->name('admin.product.delete');

    Route::get('/admin/category', [CategoryController::class, 'category'])->name('admin.category');
    Route::get('/admin/category/tambah', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/admin/category/tambah', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/admin/category/edit/{id_category}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('/admin/category/edit/{id_category}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::get('/admin/category/delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');

    Route::get('/admin/setting', [SettingController::class, 'setting'])->name('admin.setting');
    Route::get('/admin/setting/edit/{id_setting}', [SettingController::class, 'edit'])->name('admin.setting.edit');
    Route::put('/admin/setting/edit/{id_setting}', [SettingController::class, 'update'])->name('admin.setting.update');



});

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/product', [FrontendProductController::class, 'product'])->name('product');
