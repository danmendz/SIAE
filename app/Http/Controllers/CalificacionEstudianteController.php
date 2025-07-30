<?php

namespace App\Http\Controllers;

use App\Models\CalificacionEstudiante;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CalificacionEstudianteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CalificacionEstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $calificacionEstudiantes = CalificacionEstudiante::paginate();

        return view('calificacion-estudiante.index', compact('calificacionEstudiantes'))
            ->with('i', ($request->input('page', 1) - 1) * $calificacionEstudiantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $calificacionEstudiante = new CalificacionEstudiante();

        return view('calificacion-estudiante.create', compact('calificacionEstudiante'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CalificacionEstudianteRequest $request): RedirectResponse
    {
        CalificacionEstudiante::create($request->validated());

        return Redirect::route('calificacion-estudiantes.index')
            ->with('success', 'CalificacionEstudiante created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $calificacionEstudiante = CalificacionEstudiante::find($id);

        return view('calificacion-estudiante.show', compact('calificacionEstudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $calificacionEstudiante = CalificacionEstudiante::find($id);

        return view('calificacion-estudiante.edit', compact('calificacionEstudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CalificacionEstudianteRequest $request, CalificacionEstudiante $calificacionEstudiante): RedirectResponse
    {
        $calificacionEstudiante->update($request->validated());

        return Redirect::route('calificacion-estudiantes.index')
            ->with('success', 'CalificacionEstudiante updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        CalificacionEstudiante::find($id)->delete();

        return Redirect::route('calificacion-estudiantes.index')
            ->with('success', 'CalificacionEstudiante deleted successfully');
    }
}
