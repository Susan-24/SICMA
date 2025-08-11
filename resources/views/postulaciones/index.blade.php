@extends('adminlte::page')

@section('title', 'Seguimiento de Postulaciones')

@section('content_header')
<h1>Seguimiento de Postulaciones</h1>
@stop

@section('content')
<div class="card">
    <div class="row g-2 align-items-center">
        <div class="col-md-3">
            <label for="convocatoria" class="form-label">Seleccione convocatoria:</label>
            <select id="convocatoria" name="convocatoria" class="form-control">
                <option value="">-- Seleccione --</option>
                <option value="1">Convocatoria 2025 - Intercambio</option>
                <option value="2">Convocatoria 2025 - Estancia</option>
                <option value="3">Convocatoria 2024 - Movilidad Académica</option>
            </select>
        </div>

        <div class="col-md-3">
            <label for="estado_postulacion" class="form-label">Estado de postulación:</label>
            <select id="estado_postulacion" name="estado_postulacion" class="form-control">
                <option value="">-- Seleccione --</option>
                <option value="Pendiente">Pendiente</option>
                <option value="Aceptado">Aceptado</option>
                <option value="Rechazado">Rechazado</option>
            </select>
        </div>
        <div class="col-md-2 d-flex flex-column justify-content-end">
            <button type="button" class="btn btn-primary mt-3">Buscar</button>
        </div>
        <div class="col-md-4 d-flex justify-content-end align-items-end gap-2 mt-3 mt-md-0">
            <button type="button" class="btn btn-danger">
                <i class="fas fa-file-pdf"></i> Exportar PDF
            </button><br>
            <button type="button" class="btn btn-success">
                <i class="fas fa-file-excel"></i> Exportar Excel
            </button>
        </div>

    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de postulantes y requisitos</h3>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Apellidos</th>
                        <th>Nombre</th>
                        <th>DNI</th>
                        <th>Facultad</th>
                        <th>Escuela</th>
                        <th>Semestre</th>
                        <th>Orden Mérito</th>
                        <th>Tipo actividad</th>
                        <th>Fecha Postulación</th>
                        <th>Estado Postulación</th>
                        <th>Observaciones</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Datos simulados --}}
                    <tr>
                        <td>1001</td>
                        <td>Pariona Gonzales</td>
                        <td>Susan Karen</td>
                        <td>12345678</td>
                        <td>Ingeniería</td>
                        <td>Sistemas</td>
                        <td>5to</td>
                        <td>2</td>
                        <td>Movilidad</td>
                        <td>2025-08-01</td>
                        <td><span class="badge bg-warning">Pendiente</span></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1001</td>
                        <td>Pariona Gonzales</td>
                        <td>Susan Karen</td>
                        <td>12345678</td>
                        <td>Ingeniería</td>
                        <td>Sistemas</td>
                        <td>5to</td>
                        <td>2</td>
                        <td>Movilidad</td>
                        <td>2025-08-01</td>
                        <td><span class="badge bg-warning">Pendiente</span></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1002</td>
                        <td>Lopez Perez</td>
                        <td>Juan</td>
                        <td>87654321</td>
                        <td>Administración</td>
                        <td>Marketing</td>
                        <td>7mo</td>
                        <td>1</td>
                        <td>Estancia</td>
                        <td>2025-08-05</td>
                        <td><span class="badge bg-success">Aceptado</span></td>
                        <td>Buen perfil</td>
                    </tr>
                    <tr>
                        <td>1002</td>
                        <td>Lopez Perez</td>
                        <td>Juan</td>
                        <td>87654321</td>
                        <td>Administración</td>
                        <td>Marketing</td>
                        <td>7mo</td>
                        <td>1</td>
                        <td>Movilidad</td>
                        <td>2025-08-05</td>
                        <td><span class="badge bg-success">Aceptado</span></td>
                        <td>Buen perfil</td>
                    </tr>
                    <tr>
                        <td>1003</td>
                        <td>Ramirez Diaz</td>
                        <td>Ana</td>
                        <td>23456789</td>
                        <td>Derecho</td>
                        <td>Legal</td>
                        <td>3ro</td>
                        <td>5</td>
                        <td>Movilidad</td>
                        <td>2025-07-15</td>
                        <td><span class="badge bg-danger">Rechazado</span></td>
                        <td>Falta documentación</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @stop