@extends('layout')

@section('content')

    {{-- ****************************************************************************************** --}}
    <!-- Empieza Modal button (Alta de proyecto)-->
    @component('empleado.proyecto.registroProyectoModal')
      @slot('nombre_clientes')
        @foreach($clientes as $c)
        <?php
        $nombre=$c->nombre;
        
        $a_paterno=$c->apellido_paterno;

        $a_materno=$c->apellido_materno;

        $nombre_completo=$nombre.' '.$a_paterno.' '.$a_materno;

        $id_cliente=$c->id;
        ?>
        <option value = '{{ $id_cliente }}'>{{ $nombre_completo }}</option>
        @endforeach
    @endslot
    @endcomponent
    <!-- Termina Modal button (Alta de cliente)-->
    {{-- ****************************************************************************************** --}}
    
<div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Datos del proyecto</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <!--<span aria-hidden="true">&times;</span>-->
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Nombre del proyecto</label>
                <p>Desarrollo de aplicación movil</p>
              </div>

              <p><b>¿Se ha cotizado?</b></p>
              <p>SI</p>

              <p><b>¿Se ha entregado?</b></p>
              <p>NO</p>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Fecha de inicio</label>
                <p>22/07/2012</p>
              </div>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Fecha final</label>
                <p>25/05/2018</p>
              </div>

            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger gradient" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>



    <!-- *****************TABLA************************************* -->
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Feha de inicio</th>
                <th>Feha de entrega aproximada</th>
                <th>Duración</th>
                <th>Estatus</th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Feha de inicio</th>
                <th>Feha de entrega aproximada</th>
                <th>Duración</th>
                <th>Estatus</th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>

          @foreach($proyectos as $p)
          <tr>
                <?php 
                $nombre=$p->nombre;

                $fecha_inicial_db = $p->fechainicio;

                $anio_inicial = substr($fecha_inicial_db, 0, 4);

                $mes_inicial = substr($fecha_inicial_db, 5, 2);

                $dia_inicial = substr($fecha_inicial_db, 8, 2);

                $fecha_inicio = $dia_inicial.'/'.$mes_inicial.'/'.$anio_inicial;

                $fecha_final_db = $p->fechafinal;

                $anio_final = substr($fecha_final_db, 0, 4);

                $mes_final = substr($fecha_final_db, 5, 2);

                $dia_final = substr($fecha_final_db, 8, 2);

                $fecha_final = $dia_final.'/'.$mes_final.'/'.$anio_final;

                // ***************************************************************************************************
                // ***********************BLOQUE DONDE SE CALCULA LA DURACIÓN DEL PROYECTO***************************
                // *****************************************************************************************************
                $segundos = strtotime($fecha_final_db) - strtotime($fecha_inicial_db);

                $dias = (($segundos/60)/60)/24;

                  if($dias>=30){
                    $dtF = new DateTime("@0");
                    $dtT = new DateTime("@$segundos");
                    $duracion = $dtF->diff($dtT)->format('%m meses');
                  }
                  else{
                    $dtF = new DateTime("@0");
                    $dtT = new DateTime("@$segundos");
                    $duracion = $dtF->diff($dtT)->format('%a dias');
                  }

                $estatus = $p->estatus;
                // ***************************************************************************************************
                // ***********************BLOQUE DONDE SE CALCULA LA DURACIÓN DEL PROYECTO***************************
                // *****************************************************************************************************
                ?>
                <td>{{ $nombre }}</td>
                <td>{{ $fecha_inicio }}</td>
                <td>{{ $fecha_final }}</td>
                <td>{{ $duracion }}</td>
                <td>{{ $estatus }}</td>
                <td>
                  {{-- *********************************BOTÓN DE MOSTRAR DATOS************************************* --}}
                  <form action="{{URL('proyecto/'. isset($proyecto) ?: '')}}" method="POST">
                  <a href="{{URL('proyecto/'. $p->id.'/show')}}" class="btn btn-primary gradient"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></a>
                  </form>
                  {{-- *********************************BOTÓN DE MOSTRAR DATOS************************************* --}}

                  <button type="button" class="btn btn-primary gradient" data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>

                </td>
            </tr>
            @endforeach
        </tbody>
</table>

{{-- ***********************************FIN TABLA******************************************* --}}

@stop