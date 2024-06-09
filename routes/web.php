<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/profile', [ProfileController::class, 'profile'])->middleware(['auth', 'verified'])->name('profile');
Route::get('/catalog', [HomeController::class, 'catalog'])->name('catalog');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/delivery', [HomeController::class, 'delivery'])->name('delivery');
Route::post('/profile/edit', [ProfileController::class, 'edit_profile'])->middleware(['auth', 'verified'])->name('editProfile');
Route::get('/admin', [AdminController::class, 'index'])->name('Admin');

require __DIR__.'/auth.php';
