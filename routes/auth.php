<?php

use App\Http\Controllers\AuthenticateUserController;
use App\Http\Controllers\RegisterUserController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
  Route::get('/login', [AuthenticateUserController::class, 'create']);
  Route::post('/login', [AuthenticateUserController::class, 'store']);
  Route::get('/signup', [RegisterUserController::class, 'create']);
  Route::post('/signup', [RegisterUserController::class, 'store']);
});

Route::middleware('auth')->group(function () {
  Route::post('/logout', [AuthenticateUserController::class, 'destroy']);
});
