<?php

use App\Http\Controllers\AdeudoEstudiantilController;
use App\Http\Controllers\Api\AdeudoEstudiantilController as ApiAdeudoEstudiantilController;
use App\Http\Controllers\Api\EstudianteController as ApiEstudianteController;
use App\Http\Controllers\Api\DocumentacionEstudiantilController as ApiDocumentacionEstudiantilController;
use App\Http\Controllers\Api\CalificacionEstudianteController as ApiCalificacionEstudianteController;
use App\Http\Controllers\Api\InformacionEstudianteController;
use App\Http\Controllers\Api\PromedioEstudianteController as ApiPromedioEstudianteController;
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

// Authentication Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// API Routes
Route::get('api/estudiantes', [ApiEstudianteController::class, 'index']);
Route::get('api/estudiantes/matricula/{matricula}', [ApiEstudianteController::class, 'show']);

Route::get('api/adeudos', [ApiAdeudoEstudiantilController::class, 'index']);
Route::get('api/adeudos/matricula/{matricula}', [ApiAdeudoEstudiantilController::class, 'show']);

Route::get('api/documentacion', [ApiDocumentacionEstudiantilController::class, 'index']);
Route::get('api/documentacion/matricula/{matricula}', [ApiDocumentacionEstudiantilController::class, 'show']);

Route::get('api/calificaciones', [ApiCalificacionEstudianteController::class, 'index']);
Route::get('api/calificaciones/matricula/{matricula}', [ApiCalificacionEstudianteController::class, 'show']);
Route::get('api/calificaciones/matricula/{matricula}/periodo', [ApiCalificacionEstudianteController::class, 'porMatriculaYPeriodoCompleto']);

Route::get('api/promedios', [ApiPromedioEstudianteController::class, 'index']);
Route::get('api/promedios/matricula/{matricula}', [ApiPromedioEstudianteController::class, 'show']);
Route::get('api/promedios/matricula/{matricula}/periodo', [ApiPromedioEstudianteController::class, 'porMatriculaYPeriodoCompleto']);

Route::get('api/info-estudiante/matricula/{matricula}', [InformacionEstudianteController::class, 'show']);
Route::get('api/info-estudiante/matricula/{matricula}/periodo', [InformacionEstudianteController::class, 'showByPeriodo']);

// Resource Controllers
Route::resource('periodos', PeriodoController::class);
Route::resource('estudiantes', EstudianteController::class);
Route::resource('documentacion-estudiantil', DocumentacionEstudiantilController::class);
Route::resource('adeudo-estudiantil', AdeudoEstudiantilController::class);
Route::resource('calificacion-estudiantes', CalificacionEstudianteController::class);
Route::resource('promedio-estudiantes', PromedioEstudianteController::class);

require __DIR__.'/auth.php';
