@extends('layout')

@section('content')

<vue-timepicker></vue-timepicker>

      <!-- FIN DE SECCIÓN DE PERFIL -->

    <!-- Empieza Modal button (Alta de cliente)-->
    @component('empleado.historial.registroHistorialModal')
    @slot('nombre_clientes')
        @foreach($clientes as $cli)
        <?php

        $nombre=$cli->nombre;

        $a_paterno=$cli->apellido_paterno;

        $a_materno=$cli->apellido_materno;

        // MAYUSCULAS
        $nombre=ucfirst($nombre);
        $a_paterno=ucfirst($a_paterno);
        $a_materno=ucfirst($a_materno);

        $nombre_completo=$nombre.' '.$a_paterno.' '.$a_materno;

        $id_cliente=$cli->id;
        ?>
        <option value = '{{ $id_cliente }}'>{{ $nombre_completo }}</option>
        @endforeach
    @endslot
    @endcomponent
    <!-- Termina Modal button (Alta de cliente)-->

    <!-- -->

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Cliente que se contactó</th>
                <th>Comentario</th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Cliente que se contactó</th>
                <th>Comentario</th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>

          <?php
            $relacion = DB::table('cliente')
            ->join('contacta', 'cliente.id', '=', 'contacta.id_cliente')
            ->select('cliente.*','contacta.*')
            ->orderBy('cliente.id', 'asc')
            ->get();
          ?>

            @foreach($relacion as $c)
          <tr>
            <?php
            // **************************************************************************************************************
            // ****************SE ACOMODA LA FECHA PARA DESPLEGARLA EN NUESTRO FORMATO************************************
            // **************************************************************************************************************
                $fecha = $c->fecha;

                $anio_inicial = substr($fecha, 0, 4);

                $mes_inicial = substr($fecha, 5, 2);

                $dia_inicial = substr($fecha, 8, 2);

                $fecha_despliegue = $dia_inicial.'/'.$mes_inicial.'/'.$anio_inicial;
            // **************************************************************************************************************
            // ****************SE ACOMODA LA FECHA PARA DESPLEGARLA EN NUESTRO FORMATO************************************
            // **************************************************************************************************************
                $hora_base=$c->hora;

                $hora=substr($hora_base, 0, 2);

                $minuto=substr($hora_base, 3, 2);

                if($hora >= 12){
                    if($hora > 12){
                       $hora -= 12; 
                    }
                    
                    $tiempo_dia = 'pm';
                }        
                else{
                    $tiempo_dia = 'am';
                }

                if($hora == '00'){
                    $hora = 12;
                    $tiempo_dia = 'am';
                }

                $hora_contacto = $hora.':'.$minuto.' '.$tiempo_dia;
                
                $cliente=$c->nombre;

                ?>
                <td>{{ $fecha_despliegue }}</td>
                <td>{{ $hora_contacto }}</td>
                <td>{{ $cliente }}</td>
                <td>{{ $c->comentario }}</td>

                <td>
                  {{-- <form action="{{URL('historial/'. isset($historial) ?: '')}}" method="POST">
                  <a href="{{URL('historial/'. $c->c_id.'/show')}}" class="btn btn-primary gradient"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></a>
                  </form> --}}

                  <button type="button" class="btn btn-primary gradient" data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                </td>
            </tr>
            @endforeach
        </tbody>
</table>      

<script type="text/javascript">
  
  $(document).ready(function() {
    $('#example').DataTable();
  } );

</script>

@stop