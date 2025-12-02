<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcademyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminAcademyController;

Route::get('/', HomeController::class)->name('home');
Route::get('/academy', AcademyController::class)->name('academy');
Route::get('/about', AboutController::class)->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.store');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminAcademyController::class,'index'])->name('admin.dashboard');
    Route::get('/academy/create', [AdminAcademyController::class,'create'])->name('admin.academy.create');
    Route::post('/academy/create', [AdminAcademyController::class,'store'])->name('admin.academy.store');
    Route::get('/academy/edith', [AdminAcademyController::class,'edith'])->name('admin.academy.edith');
    Route::put('/academy/update', [AdminAcademyController::class,'update'])->name('admin.academy.update');
});
