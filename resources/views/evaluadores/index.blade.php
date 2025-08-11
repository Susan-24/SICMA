@extends('adminlte::page')

@section('title', 'Registrar Evaluador')

@section('content_header')
    <h1>Registrar Nuevo Evaluador</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="nombre">Nombre completo:</label>
                <input type="text" id="nombre" class="form-control" placeholder="Ingrese nombre del evaluador" disabled>
            </div>
            <div class="form-group mt-3">
                <label for="correo">Correo electrónico:</label>
                <input type="email" id="correo" class="form-control" placeholder="ejemplo@correo.com" disabled>
            </div>
            <button type="submit" class="btn btn-primary mt-3" disabled>Registrar Evaluador</button>
        </form>
    </div>
</div>
@stop
