<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AdeudoEstudiantil;
use App\Models\CalificacionEstudiante;
use App\Models\DocumentacionEstudiantil;
use App\Models\Estudiante;
use App\Models\Periodo;
use App\Models\PromedioEstudiante;
use Illuminate\Http\Request;
use App\Http\Resources\CalificacionResource;
use App\Http\Resources\EstudianteResource;
use App\Http\Resources\PromedioResource;
use App\Http\Resources\AdeudoResource;
use App\Http\Resources\DocumentacionResource;


class InformacionEstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($matricula)
    {
        $estudiante = Estudiante::with('periodo')->where('matricula', $matricula)->first();

        if (!$estudiante) {
            return response()->json(['message' => 'Estudiante no encontrado'], 404);
        }

        $adeudos = AdeudoEstudiantil::where('matricula', $matricula)->get();
        $documentos = DocumentacionEstudiantil::where('matricula', $matricula)->get();
        $calificaciones = CalificacionEstudiante::with('periodo')->where('matricula', $matricula)->get();
        $promedios = PromedioEstudiante::with('periodo')->where('matricula', $matricula)->get();

        return response()->json([
            'estudiante' => new EstudianteResource($estudiante),
            'adeudos' => AdeudoResource::collection($adeudos),
            'documentacion' => DocumentacionResource::collection($documentos),
            'calificaciones' => CalificacionResource::collection($calificaciones),
            'promedios' => PromedioResource::collection($promedios),
        ]);
    }

    /**
     * Display the specified resource by period.
     * http://127.0.0.1:8001/api/info-estudiante/matricula/3522110167/periodo?mes_inicio=1&mes_fin=4&anio=2025
     */
    public function showByPeriodo(Request $request, $matricula)
    {
        $mes_inicio = $request->query('mes_inicio');
        $mes_fin = $request->query('mes_fin');
        $anio = $request->query('anio');

        // Validación de parámetros
        if (!$mes_inicio || !$mes_fin || !$anio) {
            return response()->json([
                'message' => 'Faltan parámetros: los meses deben estar entre 1 y 12, y el anio debe ser un número entre 1900 y el año actual.'
            ], 400);
        }

        if (!is_numeric($mes_inicio) || !is_numeric($mes_fin) || !is_numeric($anio) ||
            $mes_inicio < 1 || $mes_inicio > 12 || $mes_fin < 1 || $mes_fin > 12 || $anio < 1900 || $anio > date('Y')) {
            return response()->json([
                'message' => 'Parámetros inválidos: los parámetros deben estar en un rango válido'
            ], 400);
        }

        // Buscar estudiante
        $estudiante = Estudiante::with('periodo')->where('matricula', $matricula)->first();
        if (!$estudiante) {
            return response()->json(['message' => 'Estudiante no encontrado'], 404);
        }

        // Buscar período único
        $periodos = Periodo::where('mes_inicio', $mes_inicio)
            ->where('mes_fin', $mes_fin)
            ->where('anio', $anio)
            ->get();

        if ($periodos->count() !== 1) {
            return response()->json(['message' => 'Periodo no encontrado o no es único'], 404);
        }

        $periodo = $periodos->first();

        // Obtener datos relacionados
        $adeudos = AdeudoEstudiantil::where('matricula', $matricula)->get();
        $documentos = DocumentacionEstudiantil::where('matricula', $matricula)->get();

        $calificaciones = CalificacionEstudiante::with('periodo')
            ->where('matricula', $matricula)
            ->where('periodo_calificaciones', $periodo->id)
            ->get();

        $promedios = PromedioEstudiante::with('periodo')
            ->where('matricula', $matricula)
            ->where('periodo_id', $periodo->id)
            ->get();

        return response()->json([
            'estudiante' => new EstudianteResource($estudiante),
            'adeudos' => AdeudoResource::collection($adeudos),
            'documentacion' => DocumentacionResource::collection($documentos),
            'calificaciones' => CalificacionResource::collection($calificaciones),
            'promedios' => PromedioResource::collection($promedios),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
