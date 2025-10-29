<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\AutomovilController;
use App\Http\Controllers\TurnoController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Acá definís las rutas principales del sistema.
| Las rutas protegidas (solo usuarios logueados) van dentro del middleware "auth".
|--------------------------------------------------------------------------
*/

// 👇 Ruta pública — Landing page (no requiere login)
Route::get('/', function () {
    return view('landing'); // Vista pública de presentación del sistema
})->name('landing');

// 👇 Ruta de compatibilidad — evita el error "Route [dashboard] not defined"
Route::get('/dashboard', function () {
    return redirect()->route('inicio'); // Redirige al panel principal
})->name('dashboard');

// 👇 Rutas protegidas — solo accesibles si el usuario está logueado
Route::middleware(['auth'])->group(function () {

    // 🔹 Página principal después del login
    Route::get('/inicio', function () {
        return view('inicio'); // Vista interna (dashboard del sistema)
    })->name('inicio');

    // 🔹 Perfil del usuario (Laravel Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // 🔹 CRUDs principales
    Route::resource('usuarios', UserController::class);
    Route::resource('automoviles', AutomovilController::class);
    Route::resource('servicios', ServicioController::class);
    Route::resource('turnos', TurnoController::class);
});

// 🔐 Rutas de autenticación (login, registro, etc.)
require __DIR__ . '/auth.php';
