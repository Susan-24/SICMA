@extends('adminlte::page')

@section('title', 'Crear Convocatoria')

@section('content_header')
<h1>Crear Convocatoria</h1>
@stop

@section('content')
@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

{{-- Mostrar errores de validación --}}
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('convocatorias.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="nombre">Descripcion</label>
        <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
    </div>
    <div class="form-group">
    <label for="id_tipo_actividad">Tipo de Actividad</label>
    <select name="id_tipo_actividad" class="form-control" required>
        <option value="">-- Seleccione --</option>
        @foreach ($tiposActividad as $tipo)
            <option value="{{ $tipo->id_actividad }}" {{ old('id_tipo_actividad') == $tipo->id_actividad ? 'selected' : '' }}>
                {{ $tipo->nombre_actividad }}
            </option>
        @endforeach
    </select>
</div>

    <div class="form-group">
        <label for="fecha_inicio">Fecha Inicio</label>
        <input type="date" name="fecha_inicio" class="form-control" value="{{ old('fecha_inicio') }}" required>
    </div>

    <div class="form-group">
        <label for="fecha_fin">Fecha Fin</label>
        <input type="date" name="fecha_fin" class="form-control" value="{{ old('fecha_fin') }}" required>
    </div>

    <div class="form-group">
        <label for="bases">Bases (PDF)</label>
        <input type="file" name="documentos[bases]" class="form-control" accept=".pdf">
    </div>

    <div class="form-group">
        <label for="resolucion">Reglamento (PDF)</label>
        <input type="file" name="documentos[resolucion]" class="form-control" accept=".pdf">
    </div>
    <div class="form-group">
    <label for="anexos">Subir Anexo (PDF o Word)</label>
    <input type="file" name="documentos[anexos]" id="anexos" 
           accept=".pdf,.doc,.docx" 
           class="form-control" required>
</div>


    <button type="submit" class="btn btn-primary">Guardar Convocatoria</button>
</form>
@stop