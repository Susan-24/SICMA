@extends('adminlte::page')

@section('title', 'Revisión y Aprobación Final')

@section('content_header')
    <h1>Revisión y Aprobación Final de Resultados</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Estado Actual</th>
                    <th>Evaluación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1001</td>
                    <td>Susan Karen Pariona Gonzales</td>
                    <td><span class="badge bg-warning">Evaluada</span></td>
                    <td><a href="#" class="btn btn-info btn-sm">Ver Detalle</a></td>
                    <td>
                        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#aprobarModal">Aprobar</button>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#rechazarModal">Rechazar</button>
                    </td>
                </tr>
                <!-- Más filas -->
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Aprobar -->
<div class="modal fade" id="aprobarModal" tabindex="-1" aria-labelledby="aprobarModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form>
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="aprobarModalLabel">Aprobar Postulación</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
                <label for="observacionAprobar" class="form-label">Observaciones (opcional):</label>
                <textarea id="observacionAprobar" class="form-control" rows="3"></textarea>
            </div>
            <p>¿Está seguro de aprobar esta postulación?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success">Confirmar Aprobación</button>
          </div>
        </div>
    </form>
  </div>
</div>

<!-- Modal Rechazar -->
<div class="modal fade" id="rechazarModal" tabindex="-1" aria-labelledby="rechazarModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form>
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="rechazarModalLabel">Rechazar Postulación</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
                <label for="observacionRechazar" class="form-label">Observaciones (requeridas):</label>
                <textarea id="observacionRechazar" class="form-control" rows="3" required></textarea>
            </div>
            <p>¿Está seguro de rechazar esta postulación?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-danger">Confirmar Rechazo</button>
          </div>
        </div>
    </form>
  </div>
</div>
@stop
