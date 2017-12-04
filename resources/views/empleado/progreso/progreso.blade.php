@extends('layout')

@section('content')

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre de proyecto</th>
                <th>Fecha de inicio</th>
                <th>Fecha de entrega aproximada</th>
                <th>Progreso por módulo</th>
                <th>Progreso total</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre de proyecto</th>
                <th>Fecha de inicio</th>
                <th>Fecha de entrega aproximada</th>
                <th>Progreso por módulo</th>
                <th>Progreso total</th>
            </tr>
        </tfoot>
        <tbody>

          <?php
                $relacion = DB::table('proyecto')
                ->join('modulo', 'proyecto.id', '=', 'modulo.id_proyecto')
                ->select('proyecto.id as id', 'proyecto.nombre as nombre','proyecto.fechainicio','proyecto.fechafinal')
                ->groupBy('proyecto.id')
                ->orderBy('proyecto.id', 'asc')
                ->get();
                ?>

          @foreach($relacion as $p)
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

            ?>

            <tr>
                <td>{{ $nombre }}</td>
                <td>{{ $fecha_inicio }}</td>
                <td>{{ $fecha_final }}</td>
                <td>
                {{-- *********************************BOTÓN DE MOSTRAR DATOS************************************* --}}
                  <form action="{{URL('progreso/'. isset($progreso) ?: '')}}" method="POST">
                  <a href="{{URL('progreso/'. $p->id.'/show')}}" class="btn btn-primary gradient"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                  </form>
                  {{-- *********************************BOTÓN DE MOSTRAR DATOS************************************* --}}
                </td>
                <td>20%</td>
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