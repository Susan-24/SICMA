@extends('adminlte::page')

@section('title', 'Formulario de Postulación')

@section('content_header')
    <h1>Formulario de Postulación</h1>
@stop

@section('content')
<div class="row">
    {{-- Columna 1: Datos del estudiante --}}
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5>Datos del Estudiante</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="codigo_alumno">Código de Alumno</label>
                        <input type="text" class="form-control" id="codigo_alumno" placeholder="Ingrese su código">
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" placeholder="Ingrese sus apellidos">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombres</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Ingrese sus nombres">
                    </div>
                    <div class="form-group">
                        <label for="dni">DNI</label>
                        <input type="text" class="form-control" id="dni" placeholder="Ingrese su DNI">
                    </div>
                    <div class="form-group">
                        <label for="facultad">Facultad</label>
                        <input type="text" class="form-control" id="facultad" placeholder="Ingrese su facultad">
                    </div>
                    <div class="form-group">
                        <label for="escuela">Escuela</label>
                        <input type="text" class="form-control" id="escuela" placeholder="Ingrese su escuela">
                    </div>
                    <div class="form-group">
                        <label for="semestre">Semestre</label>
                        <input type="text" class="form-control" id="semestre" placeholder="Ingrese su semestre">
                    </div>
                    <div class="form-group">
                        <label for="orden_merito">Orden de Mérito</label>
                        <input type="text" class="form-control" id="orden_merito" placeholder="Ingrese su orden de mérito">
                    </div>
                    <div class="form-group">
                        <label for="ciclo">Ciclo</label>
                        <input type="text" class="form-control" id="ciclo" placeholder="Ingrese su ciclo">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección</label>
                        <input type="text" class="form-control" id="direccion" placeholder="Ingrese su dirección">
                    </div>
                    <div class="form-group">
                        <label for="num_celular">Número de Celular</label>
                        <input type="text" class="form-control" id="num_celular" placeholder="Ingrese su número">
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Columna 2: Requisitos --}}
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5>Requisitos (Subir archivos en PDF, Word o Excel)</h5>
            </div>
            <div class="card-body">
                <form>
                    @for($i = 1; $i <= 9; $i++)
                        <div class="form-group">
                            <label for="req{{ $i }}">Requisito {{ $i }}</label>
                            <input type="file" class="form-control" id="req{{ $i }}" accept=".pdf,.doc,.docx,.xls,.xlsx">
                        </div>
                    @endfor
                    <button type="submit" class="btn btn-primary mt-3">Enviar Postulación</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
