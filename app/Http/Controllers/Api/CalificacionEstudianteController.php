<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CalificacionEstudiante;
use App\Models\Periodo;
use Illuminate\Http\Request;

class CalificacionEstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(CalificacionEstudiante::paginate(), 200);
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
        $calificaciones = CalificacionEstudiante::where('matricula', $matricula)->get();

        if ($calificaciones->isEmpty()) {
            return response()->json(['message' => 'No se encontraron calificaciones para esta matrícula'], 404);
        }

        return response()->json($calificaciones, 200);
    }

    /**
     * Display the specified resource for a specific period.
     * http://127.0.0.1:8001/api/calificaciones/matricula/3522110167/periodo?mes_inicio=1&mes_fin=4&anio=2025
     */
    public function porMatriculaYPeriodoCompleto(Request $request, $matricula)
    {
        $periodo = Periodo::where('mes_inicio', $request->mes_inicio)
            ->where('mes_fin', $request->mes_fin)
            ->where('anio', $request->anio)
            ->first();

        if (!$periodo) {
            return response()->json(['message' => 'Periodo no encontrado'], 404);
        }

        $calificaciones = \App\Models\CalificacionEstudiante::where('matricula', $matricula)
            ->where('periodo_calificaciones', $periodo->id)
            ->get();

        if ($calificaciones->isEmpty()) {
            return response()->json(['message' => 'No se encontraron calificaciones para esta matrícula en el periodo dado'], 404);
        }

        return response()->json($calificaciones, 200);
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
