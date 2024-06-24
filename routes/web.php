<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ScienceController;
use App\Http\Controllers\AuthController;


Route::get('/home', [Controller::class, 'index'])->name('home');
Route::get('/', function () {
    return redirect()->route('home');
});


Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/profile', [AuthController::class, 'showProfile'])->name('auth.showProfile');
    Route::get('/profile/edit', [AuthController::class, 'showEditForm'])->name('auth.showEditForm');
    Route::patch('/profile/edit', [AuthController::class, 'update'])->name('auth.update');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('auth.showLoginForm');
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('auth.showRegisterForm');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
});

Route::get('/sciences', [ScienceController::class, 'index'])->name('sciences');
Route::get('sciences/{name}', [ScienceController::class, 'topics_by_science'])->name('sciences.topics_by_science');
Route::get('sciences/{science_name}/{topic_name}', [ScienceController::class, 'lessons_by_topic'])->name('sciences.lessons_by_topic');
Route::get('sciences/{science_name}/{topic_name}/{lesson_name}', [ScienceController::class, 'show_lesson'])->name('sciences.show_lesson');
Route::middleware('auth')->group(function () {
    Route::post('sciences/{science_name}/{topic_name}/{lesson_name}', [ScienceController::class, 'store_mark'])->name('sciences.store_mark');
});

