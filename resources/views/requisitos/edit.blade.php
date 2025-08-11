@extends('adminlte::page')

@section('title', 'Editar Requisito')

@section('content_header')
    <h1>Editar Requisito</h1>
@stop

@section('content')
<form action="{{ route('requisitos.update', $requisito) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nombre_requisito">Nombre del requisito</label>
        <input type="text" name="nombre_requisito" class="form-control" value="{{ old('nombre_requisito', $requisito->nombre_requisito) }}" required>
    </div>

    <div class="form-group">
        <label for="descripcion">Descripción</label>
        <textarea name="descripcion" class="form-control">{{ old('descripcion', $requisito->descripcion) }}</textarea>
    </div>

    <div class="form-group">
        <label for="id_convocatoria">Convocatoria</label>
        <select name="id_convocatoria" class="form-control" required>
            <option value="">-- Seleccione convocatoria --</option>
            @foreach ($convocatorias as $conv)
                <option value="{{ $conv->id_convocatoria }}" {{ old('id_convocatoria', $requisito->id_convocatoria) == $conv->id_convocatoria ? 'selected' : '' }}>
                    {{ $conv->nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-primary">Actualizar</button>
</form>
@stop
