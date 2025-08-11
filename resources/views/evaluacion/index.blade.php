@extends('adminlte::page')

@section('title', 'Listado de Postulantes')

@section('content_header')
    <h1>Listado de Postulantes por Convocatoria</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <label for="convocatoria" class="form-label">Seleccione convocatoria:</label>
        <select id="convocatoria" name="convocatoria" class="form-control" style="max-width: 400px;">
            <option value="">-- Seleccione --</option>
            <option value="1">Convocatoria 2025 - Intercambio</option>
            <option value="2">Convocatoria 2025 - Estancia</option>
        </select>
    </div>

    <div class="card-body table-responsive mt-3">
        <table class="table table-bordered table-hover">
            <thead class="thead-light text-center">
                <tr>
                    <th>Código</th>
                    <th>Apellidos</th>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Estado Postulación</th>
                    <th>Detalles</th>
                </tr>
            </thead>
            <tbody>
                {{-- Datos simulados --}}
                <tr>
                    <td>1001</td>
                    <td>Pariona Gonzales</td>
                    <td>Susan Karen</td>
                    <td>12345678</td>
                    <td><span class="badge bg-warning">Pendiente</span></td>
                    <td class="text-center">
                        <a href="{{ url('/evaluacion/detalle') }}" class="btn btn-info btn-sm">Detalles</a>
                    </td>
                </tr>
                <tr>
                    <td>1002</td>
                    <td>Lopez Perez</td>
                    <td>Juan</td>
                    <td>87654321</td>
                    <td><span class="badge bg-success">Aceptado</span></td>
                    <td class="text-center">
                        <a href="{{ url('/evaluacion/detalle') }}" class="btn btn-info btn-sm">Detalles</a>
                    </td>
                </tr>
                <tr>
                    <td>1003</td>
                    <td>Ramirez Diaz</td>
                    <td>Ana</td>
                    <td>23456789</td>
                    <td><span class="badge bg-danger">Rechazado</span></td>
                    <td class="text-center">
                        <a href="{{ url('/evaluacion/detalle') }}" class="btn btn-info btn-sm">Detalles</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@stop
