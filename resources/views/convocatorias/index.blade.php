@extends('adminlte::page')

@section('title', 'Listado de Convocatorias')

@section('content_header')
    <h1>Convocatorias</h1>
@stop

@section('content')
    <a href="{{ route('convocatorias.create') }}" class="btn btn-primary mb-3">Registrar Nueva Convocatoria</a>

    <table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo de Movilidad</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Estado</th>
            <th>Documentos</th> <!-- Nueva columna -->
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($convocatorias as $convocatoria)
            <tr>
                <td>{{ $convocatoria->id_convocatoria }}</td>
                <td>{{ $convocatoria->nombre }}</td>
                <td>{{ $convocatoria->tipoActividad ? $convocatoria->tipoActividad->nombre_actividad : 'N/A' }}</td>
                <td>{{ $convocatoria->fecha_inicio }}</td>
                <td>{{ $convocatoria->fecha_fin }}</td>
                <td>{{ $convocatoria->estado ?? 'Pendiente' }}</td>
                <td>
                    @foreach($convocatoria->documentos as $doc)
                     <a href="{{ asset('storage/' . $doc->ruta_archivo) }}" target="_blank" title="{{ $doc->nombre_archivo }}" class="badge badge-info">
        {{ ucfirst($doc->tipo) }}
    </a><br>
@endforeach
                </td>
                <td>
                    <a href=""class="btn btn-sm btn-primary" title="Editar" style="margin-right: 8px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <form action="" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" title="Eliminar" style="background:none; border:none; padding:0; color:#dc3545; cursor:pointer;">
            <i class="fa fa-trash" aria-hidden="true"></i>
        </button>
    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@stop
