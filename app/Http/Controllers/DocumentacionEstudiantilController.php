<?php

namespace App\Http\Controllers;

use App\Models\DocumentacionEstudiantil;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DocumentacionEstudiantilRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DocumentacionEstudiantilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $documentacionEstudiantils = DocumentacionEstudiantil::paginate();

        return view('documentacion-estudiantil.index', compact('documentacionEstudiantils'))
            ->with('i', ($request->input('page', 1) - 1) * $documentacionEstudiantils->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $documentacionEstudiantil = new DocumentacionEstudiantil();

        return view('documentacion-estudiantil.create', compact('documentacionEstudiantil'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DocumentacionEstudiantilRequest $request): RedirectResponse
    {
        DocumentacionEstudiantil::create($request->validated());

        return Redirect::route('documentacion-estudiantils.index')
            ->with('success', 'DocumentacionEstudiantil created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $documentacionEstudiantil = DocumentacionEstudiantil::find($id);

        return view('documentacion-estudiantil.show', compact('documentacionEstudiantil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $documentacionEstudiantil = DocumentacionEstudiantil::find($id);

        return view('documentacion-estudiantil.edit', compact('documentacionEstudiantil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DocumentacionEstudiantilRequest $request, DocumentacionEstudiantil $documentacionEstudiantil): RedirectResponse
    {
        $documentacionEstudiantil->update($request->validated());

        return Redirect::route('documentacion-estudiantils.index')
            ->with('success', 'DocumentacionEstudiantil updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        DocumentacionEstudiantil::find($id)->delete();

        return Redirect::route('documentacion-estudiantils.index')
            ->with('success', 'DocumentacionEstudiantil deleted successfully');
    }
}
