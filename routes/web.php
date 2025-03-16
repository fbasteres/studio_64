<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Page\PageController;
use Illuminate\Support\Facades\Route;

Route::get ('/',[HomeController::class, 'index'])->name('inicio1');

//Autenticacion
Route::get ('/login',[AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//Administracion
Route::get ('/admin', [DashboardController::class, 'dashboard'])->name('admin');
Route::get ('/admin/planes', [PlanController::class, 'index'])->name('planes.index'); 

//Vista Publica
Route::get ('/servicios',[PageController::class, 'servicios'])->name('servicios.page');
Route::get ('/informacion',[PageController::class, 'informacion'])->name('informacion.page');
Route::get ('/locacion',[PageController::class, 'locacion'])->name('locacion.page');
Route::get ('/nosotros',[PageController::class, 'nosotros'])->name('nosotros.page');
Route::get ('/contacto',[PageController::class, 'contacto'])->name('contacto.page');
Route::get ('/planes',[PageController::class, 'planes'])->name('planes.page');
Route::get ('/comprar',[PageController::class, 'comprar'])->name('comprar.page');




