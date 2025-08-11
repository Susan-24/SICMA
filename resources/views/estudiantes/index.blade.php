@extends('adminlte::page')

@section('title', 'Lista de Convocatorias')

@section('content_header')
    <h1>Lista de Convocatorias</h1>
@stop

@section('content')
    <div class="row">
        @forelse($convocatorias as $convocatoria)
            <div class="col-md-4">
                <div class="card">
                    @if($convocatoria->imagen)
                        <img src="{{ asset('storage/' . $convocatoria->imagen) }}" 
                             class="card-img-top" 
                             alt="{{ $convocatoria->nombre }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $convocatoria->nombre }}</h5>
                        <p class="card-text">{{ Str::limit($convocatoria->descripcion, 100) }}</p>

                        {{-- Botones / enlaces --}}
                        <div class="mb-2">
                            <a class="btn btn-outline-info btn-sm">Bases</a>
                            <a class="btn btn-outline-secondary btn-sm">Resoluciones</a>
                            <a class="btn btn-outline-warning btn-sm">Anexos</a>
                        </div>

                        <a href="{{ url('/postular') }}" class="btn btn-primary">Postular</a>
                    </div>
                </div>
            </div>
        @empty
            <p>No hay convocatorias disponibles.</p>
        @endforelse
    </div>
@stop
