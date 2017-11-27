@extends('layout')

@section('content')

      <!-- FIN DE SECCIÓN DE PERFIL -->


<!-- Empieza Modal button (AGREGAR MODULOS A PROYECTOS)-->
    @component('empleado.avance.registroAvanceModal')
    @slot('relacion_subcategory')

                  <div class="form-group">
                  <label for="recipient-name" class="form-control-label">Proyecto</label>
                  <select class="form-control" id="proyecto" name="id_proyecto" required>
                    <option value = ''></option>
                  @foreach($proyectos as $key => $value)
                  <?php 
                  $nombre=$value;
                  
                  $id = $key;
                  
                  ?>
                  <option value = '{{ $id }}'>{{ $nombre }}</option>
                  @endforeach
                  </select>
                  </div>
                  
                  <div class="form-group">
                  <label for="recipient-name" class="form-control-label">Modulo</label>
                  <select class="form-control" id="modulo" name="id_modulo">
                  </select>
                  </div>


<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="id_proyecto"]').on('change', function() {
            var stateID = $(this).val();
            var elem = document.getElementById("modulo");
            if(stateID) {
                $.ajax({
                    url: '/avance/ajax/'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="id_modulo"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="id_modulo"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                        elem = key;
                        elem.options[elem.selectedIndex];
                    }
                });
            }else{
                $('select[name="id_modulo"]').empty();
            }
        });
    });
</script>
    @endslot
    @endcomponent
    <!-- Termina Modal button (AGREGAR MODULOS A PROYECTOS)-->


<!-- **************************************************************************************************************************************FIN MODAL PRUEBA VER IMAGEN Y COMENTARIO -->

{{-- @foreach($avances as $a)
  {!! Html::image('imagen/'.$a->imagen,'imagen',['class'=>'imagen']) !!}
@endforeach --}}

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
          <?php
            $relacion = DB::table('documentacion')
            ->join('proyecto', 'proyecto.id', '=', 'documentacion.id_proyecto')
            ->join('modulo', 'modulo.id', '=', 'documentacion.id_modulo')
            ->select('proyecto.id','proyecto.nombre as nombre_proyecto','modulo.nombre as nombre_modulo','documentacion.nombre as nombre_avance','documentacion.imagen as imagen_avance','documentacion.comentario as comentario_avance','documentacion.id as avanceId')
            ->orderBy('id', 'asc')
            ->get();
          ?>

            @foreach($relacion as $r)



        <?php
                  $nombre_proyecto=$r->nombre_proyecto;
                  
                  $nombre_modulo=$r->nombre_modulo;

                  $nombre_avance=$r->nombre_avance;

                  $imagen_avance=$r->imagen_avance;

                ?>
        <tr>
          <td>{{ $nombre_proyecto }}</td>
          <td>{{ $nombre_modulo }}</td>
          <td>{{ $nombre_avance }}</td>
          <td>{{ $r->comentario_avance }}</td>
          <td>

            @if (is_null($r->imagen_avance))

            <button type="button" class="btn btn-primary gradient" data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
            
            @else

            {{-- *********************************BOTÓN DE MOSTRAR DATOS************************************* --}}
                  <form action="{{URL('avance/'. isset($avance) ?: '')}}" method="POST">
                  <a href="{{URL('avance/'. $r->avanceId.'/show')}}" class="btn btn-primary gradient"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></a>
                  </form>
                  {{-- *********************************BOTÓN DE MOSTRAR DATOS************************************* --}}

            <button type="button" class="btn btn-primary gradient" data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>

            @endif

          </td>
        </tr>

        {{-- <img src="/storage/{{ $imagen_avance }}" alt="" style="margin-right: 40px;">  INSTRUCCIÓN FUNCIONAL DE DESPLIEGUE DE IMÁGENES NOTA:ES NECESARIO TENER DATOS CON TENER EL DATO DE A QUE MODULO VA DIRIGIDO ES SUFICIENTE, PERO AÚN ASÍ, HAY QUE VALIDAR QUE SE TIENE QUE METER  --}}
        
        @endforeach

        </tbody>
</table>      

<!-- <script type="text/javascript">
  
  $(document).ready(function() {
    $('#example').DataTable();
  } );

</script> -->


<!-- -->

@stop