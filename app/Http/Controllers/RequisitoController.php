<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requisito;  
use App\Models\Convocatoria;

class RequisitoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requisitos = Requisito::with('convocatoria')->paginate(10);
        return view('requisitos.index', compact('requisitos'));

        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $convocatorias = Convocatoria::all();
        return view('requisitos.create', compact('convocatorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'nombre_requisito' => 'required|string|max:150',
            'descripcion' => 'nullable|string',
            'id_convocatoria' => 'required|exists:convocatorias,id_convocatoria',
        ]);

        Requisito::create($request->all());

        return redirect()->route('requisitos.index')->with('success', 'Requisito creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $convocatorias = Convocatoria::all();
        return view('requisitos.edit', compact('requisito', 'convocatorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'nombre_requisito' => 'required|string|max:150',
            'descripcion' => 'nullable|string',
            'id_convocatoria' => 'required|exists:convocatorias,id_convocatoria',
        ]);

        $requisito->update($request->all());

        return redirect()->route('requisitos.index')->with('success', 'Requisito actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $requisito->delete();
        return redirect()->route('requisitos.index')->with('success', 'Requisito eliminado correctamente');
    }
}
