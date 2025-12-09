<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcademyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminAcademyController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminAboutUsController;
use App\Http\Controllers\Admin\AdminContactUSController;
use App\Http\Controllers\SendEmailController;

Route::get('/', HomeController::class)->name('home');
Route::get('/academy', AcademyController::class)->name('academy');
Route::get('/about', AboutController::class)->name('about');
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.store');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/send-email', SendEmailController::class)->name('send.email');
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminAcademyController::class,'index'])->name('admin.dashboard');
    Route::get('/academy', [AdminAcademyController::class,'index'])->name('admin.academy');
    Route::get('/academy/create', [AdminAcademyController::class,'create'])->name('admin.academy.create');
    Route::post('/academy/create', [AdminAcademyController::class,'store'])->name('admin.academy.store');
    Route::get('/academy/edith/{id}', [AdminAcademyController::class,'edith'])->name('admin.academy.edith');
    Route::put('/academy/update', [AdminAcademyController::class,'update'])->name('admin.academy.update');
    Route::get('/home', [AdminHomeController::class,'show'])->name('admin.home');
    Route::post('/home/update', [AdminHomeController::class,'store'])->name('admin.home.update');
    Route::get('/about', [AdminAboutUsController::class,'show'])->name('admin.about');
    Route::post('/about/update', [AdminAboutUsController::class,'store'])->name('admin.about.update');
    Route::get('/contact-us', AdminContactUSController::class)->name('admin.contact.us');
});
