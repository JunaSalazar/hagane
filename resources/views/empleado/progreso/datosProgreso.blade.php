@extends('layout')

@section('content')

      <!-- FIN DE SECCIÓN DE PERFIL -->

    <!-- Empieza Modal button (Alta de cliente)-->
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Progreso total del proyecto "{{ $task->nombre }}"</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <!--<span aria-hidden="true">&times;</span>-->
            </button>
          </div>
          <div class="modal-body">
            <form>

              <?php
                $relacion = DB::table('modulo')
                ->join('proyecto', 'modulo.id_proyecto', '=', 'proyecto.id')
                ->select('modulo.id as modulo_id','modulo.id_proyecto as modulo_proyecto','modulo.nombre as modulo_nombre','modulo.progreso as modulo_progreso')
                ->orderBy('modulo.id', 'asc')
                ->get();

                $fecha_inicial_db = $task->fechainicio;

                $anio_inicial = substr($fecha_inicial_db, 0, 4);

                $mes_inicial = substr($fecha_inicial_db, 5, 2);

                $dia_inicial = substr($fecha_inicial_db, 8, 2);

                $fecha_inicio = $dia_inicial.'/'.$mes_inicial.'/'.$anio_inicial;

                $fecha_final_db = $task->fechafinal;

                $anio_final = substr($fecha_final_db, 0, 4);

                $mes_final = substr($fecha_final_db, 5, 2);

                $dia_final = substr($fecha_final_db, 8, 2);

                $fecha_final = $dia_final.'/'.$mes_final.'/'.$anio_final;

                ?>

            <div class="form-group">
                <label form="recipient-name" class="form-control-label">Progreso total</label>
                
                  <table id="modulos" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <tbody>
                  <thead>
                  <tr>
                    <th>Fecha inicial</th>
                    <th>Progreso total</th>
                    <th>Fecha de entrega aproximada</th>
                  </tr>
                  <tr>
                    <td>{{ $fecha_inicio }}</td>
                    <td>
                      <div class="progress">
                      <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 20%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td>{{ $fecha_final }}</td>
                  </tr>
                </thead>
              </tbody>
            </table>
            
            </div>

            <div class="form-group">
                <label form="recipient-name" class="form-control-label">Detalle por módulo</label>
                <div class="scroll">
              <table id="modulos" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <tbody>
              <thead>

                
              <tr>
                <th>Nombre de módulo</th>
                <th>Progreso del módulo</th>
                {{-- <th></th> --}}
              </tr>
              </thead>
              @foreach($relacion as $r)

              <?php

              $id = $task->id;

              $id_modulo_proyecto = $r->modulo_proyecto;

              $nombre_modulo = "";

              $progreso_modulo = "";

              if($id == $id_modulo_proyecto){

                $nombre_modulo = $r->modulo_nombre;                

                $progreso_modulo = $r->modulo_progreso;

              }
              ?>

                <tr>
                    @if($nombre_modulo!=null)
                    <td>{{ $nombre_modulo }}</td>
                    <td>{{ $progreso_modulo }}%</td>
                    @endif
                    {{-- <td>

                    <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#infoModal" data-whatever="@mdo" style="margin-bottom: 5px;"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>

                    <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#infoModal" data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>

                    </td> --}}
                  </tr>
              @endforeach
               </tbody>
            </table>
            </div>
            </div>



            </form>
          </div>
        </div>
      </div>
@stop