<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/public_relation', function () {
    return view('public_relation');
});

Route::get('/register', function () {
    return view('auth/register');
});
Route::get('/login', [AuthController::class, 'loginView'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'signIn']);

Route::get('/register', [AuthController::class, 'registerView'])->middleware('guest');
Route::post('/register', [AuthController::class, 'signUp'])->name('register');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
