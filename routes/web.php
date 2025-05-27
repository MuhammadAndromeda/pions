<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'loginView'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'signIn']);

Route::get('/register', [AuthController::class, 'registerView'])->middleware('guest');
Route::get('/register', [AuthController::class, 'signUp']);