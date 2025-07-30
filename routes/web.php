<?php

use App\Http\Controllers\AdeudoEstudiantilController;
use App\Http\Controllers\CalificacionEstudianteController;
use App\Http\Controllers\DocumentacionEstudiantilController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromedioEstudianteController;
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
});

Route::resource('periodos', PeriodoController::class);
Route::resource('estudiantes', EstudianteController::class);
Route::resource('documentacion-estudiantil', DocumentacionEstudiantilController::class);
Route::resource('adeudo-estudiantil', AdeudoEstudiantilController::class);
Route::resource('calificacion-estudiantes', CalificacionEstudianteController::class);
Route::resource('promedio-estudiantes', PromedioEstudianteController::class);

require __DIR__.'/auth.php';
