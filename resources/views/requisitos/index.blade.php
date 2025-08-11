@extends('adminlte::page')

@section('title', 'Lista de Requisitos')

@section('content_header')
    <h1>Lista de Requisitos</h1>
    <a href="{{ route('requisitos.create') }}" class="btn btn-primary mb-3">Nuevo Requisito</a>
@stop

@section('content')
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Convocatoria</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($requisitos as $req)
        <tr>
            <td>{{ $req->id_requisito }}</td>
            <td>{{ $req->nombre_requisito }}</td>
            <td>{{ $req->descripcion }}</td>
            <td>{{ $req->convocatoria->nombre ?? 'Sin convocatoria' }}</td>
            <td>
                <a href="{{ route('requisitos.edit', $req) }}" class="btn btn-sm btn-warning" title="Editar"><i class="fa fa-pencil"></i></a>
                <form action="{{ route('requisitos.destroy', $req) }}" method="POST" style="display:inline-block" onsubmit="return confirm('¿Eliminar requisito?');">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" title="Eliminar"><i class="fa fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $requisitos->links() }}
@stop
