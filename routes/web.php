<?php

use App\Http\Controllers\ApplyController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/divisions/{slug}', [DivisionController::class, 'show'])->name('department');

Route::get('/apply', [ApplyController::class, 'index'])->name('apply');
Route::post('/apply', [ApplyController::class, 'store'])->name('apply.store');

Route::get('/register', function () {
    return view('auth/register');
});
Route::get('/login', [AuthController::class, 'loginView'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'signIn']);

Route::get('/register', [AuthController::class, 'registerView'])->middleware('guest');
Route::post('/register', [AuthController::class, 'signUp'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
