@extends('layout')

@section('content')

<div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          	<?php
          		//CAMPO PARA NOMBRE Y APELLIDO PATERNO********************************************
				$nombre=$task->nombre;

                $ap=$task->apellido_paterno;
                //MAYÚSCULAS
                $nombre=ucfirst($nombre);

                $ap=ucfirst($ap);

                $nom_cliente = $nombre.' '.$ap;
                //CAMPO PARA NOMBRE Y APELLIDO PATERNO********************************************
                
				?>
            <h3 class="modal-title">Datos del cliente "{{ $nom_cliente }}"</h3>
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
						<th scope="row">Apellido paterno</th>
						<td>{{ $task->apellido_paterno }}</td>
					</tr>
					<tr>
						<th scope="row">Apellido materno</th>
						<td>{{ $task->apellido_materno }}</td>
					</tr>
					<tr>
						<th scope="row">Tipo</th>
						<td>{{ $task->tipo_cliente }}</td>
					</tr>
					<tr>
						<th scope="row">Teléfono</th>
						<td>{{ $task->telefono }}</td>
					</tr>
					<tr>
						<th scope="row">Correo electrónico</th>
						<td>{{ $task->email }}</td>
					</tr>
				</tbody>
				</table>
          </div>
        </div>
    </div>

@stop