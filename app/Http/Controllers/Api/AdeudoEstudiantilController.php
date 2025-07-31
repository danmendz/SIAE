<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AdeudoEstudiantil;
use Illuminate\Http\Request;

class AdeudoEstudiantilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adeudos = AdeudoEstudiantil::with('estudiante')->paginate();
        return response()->json($adeudos, 200);
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
        $adeudos = AdeudoEstudiantil::with('estudiante')
        ->where('matricula', $matricula)
        ->get();

        if ($adeudos->isEmpty()) {
            return response()->json(['message' => 'No se encontraron adeudos para esta matrícula'], 404);
        }

        return response()->json($adeudos, 200);
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
