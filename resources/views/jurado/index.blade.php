@extends('adminlte::page')

@section('title', 'Postulantes Aptos')

@section('content_header')
    <h1>Lista de Postulantes Aptos</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre Completo</th>
                    <th>Facultad</th>
                    <th>Escuela</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1001</td>
                    <td>Susan Karen Pariona Gonzales</td>
                    <td>Ingeniería</td>
                    <td>Sistemas</td>
                    <td><span class="badge badge-success">Apto</span></td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#asignarJuradoModal">Asignar Jurado</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Asignar Jurado -->
<div class="modal fade" id="asignarJuradoModal" tabindex="-1" role="dialog" aria-labelledby="asignarJuradoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{ url('/jurado/asignar') }}" method="POST">
        @csrf
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="asignarJuradoModalLabel">Asignar Jurado a Postulación</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="jurados">Seleccione jurados:</label>
            <select id="jurados" name="jurados[]" class="form-control" multiple style="height: 150px;">
                <option value="1">Dr. Juan Pérez</option>
                <option value="2">Dra. María López</option>
                <option value="3">Ing. Carlos Ruiz</option>
            </select>
            <small class="form-text text-muted">Puede seleccionar uno o varios jurados.</small>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Asignar</button>
          </div>
        </div>
    </form>
  </div>
</div>
@stop
