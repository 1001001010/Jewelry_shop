<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/profile', [ProfileController::class, 'profile'])->middleware(['auth', 'verified'])->name('profile');
Route::get('/catalog', [HomeController::class, 'catalog'])->name('catalog');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/delivery', [HomeController::class, 'delivery'])->name('delivery');
Route::post('/profile/edit', [ProfileController::class, 'edit_profile'])->middleware(['auth', 'verified'])->name('editProfile');

Route::get('/admin', [AdminController::class, 'index'])->name('Admin')->middleware([IsAdmin::class]);
Route::post('/admin/category/add', [AdminController::class, 'add_category'])->name('AddCategory')->middleware([IsAdmin::class]);
Route::post('/admin/position/add', [AdminController::class, 'new_position'])->name('NewPosition')->middleware([IsAdmin::class]);

require __DIR__.'/auth.php';
