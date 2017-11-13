@extends('layout')

@section('content')

      <!-- FIN DE SECCIÓN DE PERFIL -->

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre del cliente</th>
                <th>Proyecto correspondiente</th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre del cliente</th>
                <th>Proyecto correspondiente</th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>
<?php
            $relacion = DB::table('cliente')
            ->join('proyecto', 'cliente.id', '=', 'proyecto.id_cliente')
            ->select('cliente.*','proyecto.id_cliente','proyecto.nombre as nombre_proyecto')
            ->orderBy('id', 'asc')
            ->get();
?>

        @foreach($relacion as $r)
        <?php
                  $nombre=substr($r->nombre,1);
                  $nombre = str_replace("}","",$nombre);
                  if((strcmp(substr($nombre,-1),'"'))==0){
                  $nombre=substr($nombre,1);
                  $nombre = str_replace('"','',$nombre);
                  }
                  
                  $a_paterno=substr($r->apellido_paterno,1);
                  $a_paterno = str_replace("}","",$a_paterno);
                  if((strcmp(substr($a_paterno,-1),'"'))==0){
                  $a_paterno=substr($a_paterno,1);
                  $a_paterno = str_replace('"','',$a_paterno);
                  }

                  $a_materno=substr($r->apellido_materno,1);
                  $a_materno = str_replace("}","",$a_materno);
                  if((strcmp(substr($a_materno,-1),'"'))==0){
                  $a_materno=substr($a_materno,1);
                  $a_materno = str_replace('"','',$a_materno);
                  }

                  $nombre_proyecto=substr($r->nombre_proyecto,1);
                  $nombre_proyecto = str_replace("}","",$nombre_proyecto);
                  if((strcmp(substr($nombre_proyecto,-1),'"'))==0){
                  $nombre_proyecto=substr($nombre_proyecto,1);
                  $nombre_proyecto = str_replace('"','',$nombre_proyecto);
                  }

                  $nombre_cliente = $nombre.' '.$a_paterno.' '.$a_materno;
                ?>
        <tr>
          <td>{{ $nombre_cliente }}</td>
          <td>{{ $nombre_proyecto }}</td>
          <td>
            <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#infoModal" data-whatever="@mdo" style="margin-bottom: 5px;"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>
                  
            <button type="button" class="btn btn-primary gradient" data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
          </td>
        </tr>
        @endforeach
        </tbody>
</table>
@stop