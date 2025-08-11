<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ConvocatoriaController;
use App\Http\Controllers\RequisitoController;
use App\Http\Controllers\TipoActividadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/convocatorias/create', [ConvocatoriaController::class, 'create'])->name('convocatorias.create');
Route::post('/convocatorias', [ConvocatoriaController::class, 'store'])->name('convocatorias.store');
Route::get('/convocatorias', [ConvocatoriaController::class, 'index'])->name('convocatorias.index');
Route::resource('requisitos', RequisitoController::class);
Route::get('/actividad/create', [TipoActividadController::class, 'create'])->name('actividad.create');
Route::post('/actividad', [TipoActividadController::class, 'store'])->name('actividad.store');
Route::view('/postulaciones', 'postulaciones.index');
Route::view('/evaluacion', 'evaluacion.index');
Route::view('/evaluacion/detalle', 'evaluacion.detalle');
Route::view('/resultadofinal', 'resultadofinal.index');
Route::view('/evaluadores', 'evaluadores.index');
Route::view('/jurado', 'jurado.index');
});



// Formulario de postulación
Route::get('/postular', function () {
    return view('estudiantes.postular');
});

require __DIR__.'/auth.php';
