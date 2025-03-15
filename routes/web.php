<?php

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get ('/',[HomeController::class, 'index'])->name('inicio1');

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');

