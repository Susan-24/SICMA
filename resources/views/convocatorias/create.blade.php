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
        <label for="tipo_movilidad">Tipo de Movilidad</label>
        <select name="tipo_movilidad" class="form-control" required>
            <option value="">-- Seleccione --</option>
            <option value="Intercambio" {{ old('tipo_movilidad')=='Intercambio' ? 'selected' : '' }}>Intercambio
            </option>
            <option value="Estancia/Pasantía" {{ old('tipo_movilidad')=='Estancia/Pasantía' ? 'selected' : '' }}>
                Estancia/Pasantía</option>
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
        <label for="requisitos">Requisitos</label>
        <textarea name="requisitos" class="form-control">{{ old('requisitos') }}</textarea>
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
        <label for="anexos">Anexos (PDF o imágenes)</label>
        <input type="file" name="documentos[anexos][]" multiple class="form-control" accept=".pdf,image/*">
    </div>

    <button type="submit" class="btn btn-primary">Guardar Convocatoria</button>
</form>
@stop