<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\AutomovilController;
use App\Http\Controllers\TurnoController;
use Illuminate\Support\Facades\Route;

// Ruta de inicio
Route::get('/', function () {
    return view('inicio'); // Vista principal
});

// Listados
Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index');
Route::get('/servicios', [ServicioController::class, 'index'])->name('servicios.index');
Route::get('/automoviles', [AutomovilController::class, 'index'])->name('automoviles.index');
Route::get('/turnos', [TurnoController::class, 'index'])->name('turnos.index');
Route::resource('automoviles', AutomovilController::class)->parameters([
    'automoviles' => 'automovil']);
Route::resource('usuarios', UserController::class)->parameters([
    'usuarios' => 'user'
]);
Route::resource('servicios', ServicioController::class)->parameters([
    'servicios' => 'servicio'
]);
Route::resource('turnos', TurnoController::class)->parameters([
    'turnos' => 'turno'
]);


