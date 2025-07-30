<?php

namespace App\Http\Controllers;

use App\Models\AdeudoEstudiantil;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AdeudoEstudiantilRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AdeudoEstudiantilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $adeudoEstudiantils = AdeudoEstudiantil::paginate();

        return view('adeudo-estudiantil.index', compact('adeudoEstudiantils'))
            ->with('i', ($request->input('page', 1) - 1) * $adeudoEstudiantils->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $adeudoEstudiantil = new AdeudoEstudiantil();

        return view('adeudo-estudiantil.create', compact('adeudoEstudiantil'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdeudoEstudiantilRequest $request): RedirectResponse
    {
        AdeudoEstudiantil::create($request->validated());

        return Redirect::route('adeudo-estudiantils.index')
            ->with('success', 'AdeudoEstudiantil created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $adeudoEstudiantil = AdeudoEstudiantil::find($id);

        return view('adeudo-estudiantil.show', compact('adeudoEstudiantil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $adeudoEstudiantil = AdeudoEstudiantil::find($id);

        return view('adeudo-estudiantil.edit', compact('adeudoEstudiantil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdeudoEstudiantilRequest $request, AdeudoEstudiantil $adeudoEstudiantil): RedirectResponse
    {
        $adeudoEstudiantil->update($request->validated());

        return Redirect::route('adeudo-estudiantils.index')
            ->with('success', 'AdeudoEstudiantil updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        AdeudoEstudiantil::find($id)->delete();

        return Redirect::route('adeudo-estudiantils.index')
            ->with('success', 'AdeudoEstudiantil deleted successfully');
    }
}
