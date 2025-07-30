<?php

namespace App\Http\Controllers;

use App\Models\PromedioEstudiante;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PromedioEstudianteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PromedioEstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $promedioEstudiantes = PromedioEstudiante::paginate();

        return view('promedio-estudiante.index', compact('promedioEstudiantes'))
            ->with('i', ($request->input('page', 1) - 1) * $promedioEstudiantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $promedioEstudiante = new PromedioEstudiante();

        return view('promedio-estudiante.create', compact('promedioEstudiante'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PromedioEstudianteRequest $request): RedirectResponse
    {
        PromedioEstudiante::create($request->validated());

        return Redirect::route('promedio-estudiantes.index')
            ->with('success', 'PromedioEstudiante created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $promedioEstudiante = PromedioEstudiante::find($id);

        return view('promedio-estudiante.show', compact('promedioEstudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $promedioEstudiante = PromedioEstudiante::find($id);

        return view('promedio-estudiante.edit', compact('promedioEstudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PromedioEstudianteRequest $request, PromedioEstudiante $promedioEstudiante): RedirectResponse
    {
        $promedioEstudiante->update($request->validated());

        return Redirect::route('promedio-estudiantes.index')
            ->with('success', 'PromedioEstudiante updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        PromedioEstudiante::find($id)->delete();

        return Redirect::route('promedio-estudiantes.index')
            ->with('success', 'PromedioEstudiante deleted successfully');
    }
}
