@extends('layout')

@section('content')

<div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title">Datos del proyecto "{{ $task->nombre }}"</h3>
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

				<?php
				$anio_inicial = substr($task->fechainicio, 0, 4);

                $mes_inicial = substr($task->fechainicio, 5, 2);

                $dia_inicial = substr($task->fechainicio, 8, 2);

                $fecha_inicio = $dia_inicial.'/'.$mes_inicial.'/'.$anio_inicial;

                $anio_final = substr($task->fechafinal, 0, 4);

                $mes_final = substr($task->fechafinal, 5, 2);

                $dia_final = substr($task->fechafinal, 8, 2);

                $fecha_final = $dia_final.'/'.$mes_final.'/'.$anio_final;
				?>

					<tr>
						<th scope="row">Fecha de inicio</th>
						<td>{{ $fecha_inicio }}</td>
					</tr>
					<tr>
						<th scope="row">Feha de entrega aproximada</th>
						<td>{{ $fecha_final }}</td>
					</tr>
					<tr>
						<th scope="row">Estatus</th>
						<td>{{ $task->estatus }}</td>
					</tr>
				</tbody>
				</table>
          </div>
        </div>
    </div>

@stop