<?php

namespace App\Http\Controllers;
use App\Models\Modalidad;
use App\Models\TipoActividad;
use Illuminate\Http\Request;

class TipoActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
         $modalidades = Modalidad::all();
          return view('actividad.create', compact('modalidades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_actividad' => 'required|string|max:100',
            'descripcion' => 'nullable|string',
            'id_modalidad' => 'required|integer|exists:modalidad,id_modalidad',
        ]);

        // Crear el registro
        TipoActividad::create([
            'nombre_actividad' => $request->nombre_actividad,
            'descripcion' => $request->descripcion,
            'id_modalidad' => $request->id_modalidad,
        ]);

        return redirect()->back()->with('success', 'Tipo de actividad creada correctamente.');
    
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
        //
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
