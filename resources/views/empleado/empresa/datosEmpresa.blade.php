@extends('layout')

@section('content')

<div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title">Datos de la empresa "{{ $task->nombre }}"</h3>
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
						<th scope="row">Razón Social</th>
						<td>{{ $task->razon_social }}</td>
					</tr>
					<tr>
						<th scope="row">RFC</th>
						<td>{{ $task->rfc }}</td>
					</tr>
					<tr>
						<th scope="row">Calle</th>
						<td>{{ $task->calle }}</td>
					</tr>
					<tr>
						<th scope="row">Número</th>
						<td>{{ $task->numero }}</td>
					</tr>
					<tr>
						<th scope="row">Colonia</th>
						<td>{{ $task->colonia }}</td>
					</tr>
					<tr>
						<th scope="row">Código Postal</th>
						<td>{{ $task->codigo_postal }}</td>
					</tr>
					<tr>
						<th scope="row">País</th>
						<td>{{ $task->pais }}</td>
					</tr>
					<tr>
						<th scope="row">Ciudad</th>
						<td>{{ $task->ciudad }}</td>
					</tr>
					<tr>
						<th scope="row">Estado</th>
						<td>{{ $task->estado }}</td>
					</tr>
				</tbody>
				</table>
          </div>
        </div>
    </div>

@stop