@extends('adminlte::page')

@section('title', 'Detalle de Postulación')

@section('content_header')
    <h1>Detalle de Postulación</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Postulante: Susan Karen Pariona Gonzales (Código: 1001)</h3>
        <p>DNI: 12345678 | Facultad: Ingeniería | Escuela: Sistemas</p>
    </div>
    <div class="card-body">
        <h5>Datos de la Postulación</h5>
        <ul>
            <li>Convocatoria: Convocatoria 2025 - Intercambio</li>
            <li>Fecha de Postulación: 2025-08-10</li>
            <li>Estado: Pendiente</li>
            <li>Tipo de movilidad: Intercambio</li>
        </ul>

        <h5>Evaluación de Requisitos</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Requisito</th>
                    <th>Descripción</th>
                    <th>Cumple</th>
                    <th>No Cumple</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Solicitud simple dirigida al jefe de la OCRI.</td>
                    <td>Solicitud formal firmada y dirigida.</td>
                    <td><input type="radio" checked disabled></td>
                    <td><input type="radio" disabled></td>
                </tr>
                <tr>
                    <td>Copia de DNI vigente y legible.</td>
                    <td>Fotocopia legible y vigente del DNI.</td>
                    <td><input type="radio" checked disabled></td>
                    <td><input type="radio" disabled></td>
                </tr>
                <!-- más requisitos -->
            </tbody>
        </table>

        <h5>Observaciones</h5>
        <textarea class="form-control" rows="3" disabled>Falta el formato de solicitud con fotografía.</textarea>

        <h5>Documentos Adjuntos</h5>
        <ul>
            <li><a href="#">Carta de aceptación.pdf</a></li>
            <li><a href="#">Curriculum Vitae.pdf</a></li>
        </ul>

        <div class="mt-3">
            <button class="btn btn-success" disabled>Aprobar</button>
            <button class="btn btn-danger" disabled>Rechazar</button>
        </div>
    </div>
</div>
@stop
