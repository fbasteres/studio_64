<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Page\PageController;
use Illuminate\Support\Facades\Route;

Route::get ('/',[HomeController::class, 'index'])->name('inicio1');

//Autenticacion
Route::get ('/login',[AuthController::class, 'index'])->name('login');

//Administracion
Route::get ('/admin',[DashboardController::class, 'dashboard'])->name('admin');

//Vista Publica
Route::get ('/servicios',[PageController::class, 'servicios'])->name('servicio.page');

