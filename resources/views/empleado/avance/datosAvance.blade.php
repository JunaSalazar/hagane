@extends('layout')

@section('content')

      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">AVANCE</h3>
          </div>
          <div class="modal-body">
            <table class="table table-striped">
          <thead>
            <tr>
              <th>Campos:</th>
              <th>Datos:</th>
            </tr>
          </thead>
        <tbody>
          <tr>
            <th scope="row">ID</th>
            <td>{{ $task->id }}</td>
          </tr>
          <tr>
            <th scope="row">Nombre</th>
            <td>{{ $task->nombre }}</td>
          </tr>
          <tr>
            <th scope="row">Proyecto</th>
            <td>{{ $task->id_proyecto }}</td>
          </tr>
          <tr>
            <th scope="row">Modulo</th>
            <td>{{ $task->id_modulo }}</td>
          </tr>
          <tr>
            <th scope="row">Comentario texto</th>
            <td>{{ $task->comentario }}</td>
          </tr>
          @if($task->imagen != null)
            <tr>
            <th scope="row">Imagen</th>
            <td><img src="/storage/{{ $task->imagen }}" alt="" style="margin-right: 20px;"></td>
            </tr>
          @endif
          
        </tbody>
        </table>
          </div>
        </div>
      </div>

@stop