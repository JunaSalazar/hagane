@extends('layout')

@section('content')

<vue-timepicker></vue-timepicker>

      <!-- FIN DE SECCIÓN DE PERFIL -->

    <!-- Empieza Modal button (Alta de cliente)-->
    @component('empleado.historial.registroHistorialModal')
    @slot('nombre_clientes')
        @foreach($clientes as $cli)
        <?php
        $nombre=substr($cli->nombre,1);
        $nombre = str_replace("}","",$nombre);
        if((strcmp(substr($nombre,-1),'"'))==0){
            $nombre=substr($nombre,1);
            $nombre = str_replace('"','',$nombre);
        }

        $a_paterno=substr($cli->apellido_paterno,1);
        $a_paterno = str_replace("}","",$a_paterno);
        if((strcmp(substr($a_paterno,-1),'"'))==0){
            $a_paterno=substr($a_paterno,1);
            $a_paterno = str_replace('"','',$a_paterno);
        }

        $a_materno=substr($cli->apellido_materno,1);
        $a_materno = str_replace("}","",$a_materno);
        if((strcmp(substr($a_materno,-1),'"'))==0){
            $a_materno=substr($a_materno,1);
            $a_materno = str_replace('"','',$a_materno);
        }

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
                <th>Cliente</th>
                <th>Comentario</th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Cliente</th>
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
                $fecha=$c->fecha;

                $hora=substr($c->hora,1);
                $hora = str_replace("}","",$hora);
                if((strcmp(substr($hora,-1),'"'))==0){
                  $hora=substr($hora,1);
                  $hora = str_replace('"','',$hora);
                }

                $cliente=substr($c->nombre,1);
                $cliente = str_replace("}","",$cliente);
                if((strcmp(substr($cliente,-1),'"'))==0){
                  $cliente=substr($cliente,1);
                  $cliente = str_replace('"','',$cliente);
                }

                ?>
                <td>{{ $fecha }}</td>
                <td>{{ $hora }}</td>
                <td>{{ $cliente }}</td>
                <td>{{ $c->comentario }}</td>

                <td>
                  <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#infoModal" data-whatever="@mdo" style="margin-bottom: 5px;"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>
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