@extends('adminlte::page')

@section('title', 'Crear Tipo de Actividad')

@section('content_header')
    <h1>Crear Tipo de Actividad</h1>
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

    <div class="card">
        <div class="card-body">
            <form action="{{ route('actividad.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nombre_actividad" class="form-label">Nombre de la Actividad</label>
                    <input type="text" name="nombre_actividad" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea name="descripcion" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label for="id_modalidad" class="form-label">Modalidad</label>
                    <select name="id_modalidad" class="form-control" required>
                        <option value="">Seleccione una modalidad</option>
                        @foreach ($modalidades as $modalidad)
                            <option value="{{ $modalidad->id_modalidad }}">{{ $modalidad->nombre_modalidad }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@stop
