@extends('layout_cliente')

@section('content')

            <?php
            $relacion = DB::table('documentacion')
            ->join('proyecto', 'proyecto.id', '=', 'documentacion.id_proyecto')
            ->join('modulo', 'modulo.id', '=', 'documentacion.id_modulo')
            ->select('proyecto.id_cliente as proyecto_cliente','proyecto.id','proyecto.nombre as nombre_proyecto','modulo.nombre as nombre_modulo','documentacion.nombre as nombre_avance','documentacion.imagen as imagen_avance','documentacion.comentario as comentario_avance','documentacion.id as avanceId')
            ->orderBy('id', 'asc')
            ->get();


            $id_usuario = Auth::user()->id;

            $cantidad_proyectos=0;

            foreach($relacion as $r){
                if($id_usuario == $r->proyecto_cliente){
                    $cantidad_proyectos++;
                }
            }


            ?>

@if(!$cantidad_proyectos<=0)
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre de proyecto</th>
                <th>Nombre del modulo</th>
                <th>Nombre de avance</th>
                <th>Comentario</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre de proyecto</th>
                <th>Nombre del modulo</th>
                <th>Nombre de avance</th>
                <th>Comentario</th>
                <th>Imagen</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach($relacion as $r)



        <?php
                  $nombre_proyecto=$r->nombre_proyecto;
                  
                  $nombre_modulo=$r->nombre_modulo;

                  $nombre_avance=$r->nombre_avance;

                  $imagen_avance=$r->imagen_avance;

                ?>
        <tr>
          @if($id_usuario == $r->id)
          <td>{{ $nombre_proyecto }}</td>
          <td>{{ $nombre_modulo }}</td>
          <td>{{ $nombre_avance }}</td>
          <td>{{ $r->comentario_avance }}</td>
          <td>

            @if (is_null($r->imagen_avance))

            <button type="button" class="btn btn-primary gradient" data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
            
            @else

            {{-- *********************************BOTÓN DE MOSTRAR DATOS************************************* --}}
                  <form action="{{URL('cliente/avance/'. isset($avance) ?: '')}}" method="POST">
                  <a href="{{URL('cliente/avance/'. $r->avanceId.'/show')}}" class="btn btn-primary gradient"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></a>
                  </form>
                  {{-- *********************************BOTÓN DE MOSTRAR DATOS************************************* --}}
            @endif

          </td>
        </tr>
        @endif
        
        @endforeach

        </tbody>
</table>

@else

<h3>Su(s) proyecto(s) no cuenta(n) con avance(s)</h3>

@endif

@stop