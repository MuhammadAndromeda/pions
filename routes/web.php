<?php

use App\Http\Controllers\ApplyController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

Route::get('/divisions/{slug}', [DivisionController::class, 'show'])->name('department');

Route::get('/apply', [ApplyController::class, 'index'])->name('apply');
Route::post('/apply', [ApplyController::class, 'store'])->name('apply.store');

Route::get('/login', [AuthController::class, 'loginView'])->name('login');
Route::post('/login', [AuthController::class, 'signIn']);

Route::get('/register', [AuthController::class, 'registerView'])->name('register');
Route::post('/register', [AuthController::class, 'signUp']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
