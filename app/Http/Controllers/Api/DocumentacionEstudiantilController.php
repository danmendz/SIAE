<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DocumentacionEstudiantil;
use Illuminate\Http\Request;
use App\Http\Resources\DocumentacionResource;

class DocumentacionEstudiantilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(DocumentacionEstudiantil::paginate(), 200);
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
        $documentosEncontrados = DocumentacionEstudiantil::where('matricula', $matricula)->get();
        $documentos = DocumentacionResource::collection($documentosEncontrados);

        if ($documentos->isEmpty()) {
            return response()->json(['message' => 'No se encontró documentación para esta matrícula'], 404);
        }

        return response()->json($documentos, 200);
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
