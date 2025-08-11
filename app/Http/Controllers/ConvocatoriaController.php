<?php

namespace App\Http\Controllers;
use App\Models\ConvocatoriaDocumento;
use App\Models\Convocatoria;
use App\Models\TipoActividad;
use Illuminate\Http\Request;

class ConvocatoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $convocatorias = Convocatoria::all();

        if (auth()->user()->hasRole('admin')) {
            return view('convocatorias.index', compact('convocatorias'));
        } else {
            return view('estudiantes.index', compact('convocatorias'));
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tiposActividad = TipoActividad::all();
      return view('convocatorias.create', compact('tiposActividad'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:150',
            'descripcion' => 'nullable|string',
            'tipo_movilidad' => 'required|string|in:Intercambio,Estancia/Pasantía',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
            'requisitos' => 'nullable|string',
            // Aquí agrega otros campos que necesites
        ]);

    $convocatoria = Convocatoria::create([
        'nombre' => $data['nombre'],
        'bases' => $data['requisitos'] ?? null,
        'estado' => 'publicada',
        'fecha_inicio' => $data['fecha_inicio'],
        'fecha_fin' => $data['fecha_fin'],
        'id_usuario' => auth()->id(),
        'resolucion' => null,
        'id_tipo_actividad' => $data['id_tipo_actividad'],
        'id_postulante' => null,
    ]);

        if ($request->hasFile('documentos')) {
            foreach ($request->file('documentos') as $tipo => $archivos) {
                if (is_array($archivos)) {
                    foreach ($archivos as $archivo) {
                        $ruta = $archivo->store('convocatorias_documentos', 'public');
                        $convocatoria->documentos()->create([
                            'tipo' => $tipo,
                            'nombre_archivo' => $archivo->getClientOriginalName(),
                            'ruta_archivo' => $ruta,
                        ]);
                    }
                } else {
                    $ruta = $archivos->store('convocatorias_documentos', 'public');
                    $convocatoria->documentos()->create([
                        'tipo' => $tipo,
                        'nombre_archivo' => $archivos->getClientOriginalName(),
                        'ruta_archivo' => $ruta,
                    ]);
                }
            }
        }

    return redirect()->route('convocatorias.create')->with('success', 'Convocatoria creada correctamente.');
}



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

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