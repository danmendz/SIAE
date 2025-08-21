<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Periodo;
use App\Models\PromedioEstudiante;
use Illuminate\Http\Request;
use App\Http\Resources\PromedioResource;

class PromedioEstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(PromedioEstudiante::paginate(), 200);
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
        $promediosEncontrados = PromedioEstudiante::where('matricula', $matricula)->get();
        $promedios = PromedioResource::collection($promediosEncontrados);

        if ($promedios->isEmpty()) {
            return response()->json(['message' => 'No se encontraron promedios para esta matrícula'], 404);
        }
        return response()->json($promedios, 200);
    }

    /**
     * Display the specified resource for a specific period.
     * http://127.0.0.1:8001/api/promedios/matricula/3522110167/periodo?mes_inicio=1&mes_fin=4&anio=2025
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

        $promedio = PromedioEstudiante::where('matricula', $matricula)
            ->where('periodo_id', $periodo->id)
            ->first();

        if (!$promedio) {
            return response()->json(['message' => 'No se encontró el promedio para esa matrícula en ese periodo'], 404);
        }

        return response()->json($promedio, 200);
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
