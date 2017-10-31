@extends('layout')

@section('content')

      <!-- FIN DE SECCIÓN DE PERFIL -->


<!-- Empieza Modal button (AGREGAR MODULOS A PROYECTOS)-->
    @component('avance.registroAvanceModal')
    @slot('relacion_subcategory')

                  <div class="form-group">
                  <label for="recipient-name" class="form-control-label">Proyecto</label>
                  <select class="form-control" id="proyecto" name="id_proyecto">
                  @foreach($proyectos as $key => $value)
                  <?php 
                  $nombre=substr($value,1);
                  $nombre = str_replace("}","",$nombre);
                  if((strcmp(substr($nombre,-1),'"'))==0){
                  $nombre=substr($nombre,1);
                  $nombre = str_replace('"','',$nombre);
                  }
                  
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
                          value = value.replace('{','');
                          value = value.replace('"','');
                          value = value.replace('"','');
                          value = value.replace('}','');
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

<!-- MODAL PRUEBA VER IMÁGEN
**************************************************************************************************************************************************-->






<!-- Empieza Modal button (AGREGAR MODULOS A PROYECTOS)-->
<div class="modal fade" id="pruebaModulo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">AVANCE</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <!--<span aria-hidden="true">&times;</span>-->
            </button>
          </div>
          <div class="modal-body">
            <form>

            <div class="half left cf">
              <img src="/img/iconoImagen.png" style="width:250px; height:250px;">
            </div>
            <div class="half right cf">
                <p for="recipient-name" class="form-control-label">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et ipsum eros. Sed metus purus, lacinia ut ex et, cursus interdum risus. Curabitur non congue augue. In feugiat fermentum lacus, eget condimentum nisl sodales interdum. Fusce nisi augue, aliquam accumsan massa sed, tempor rhoncus augue. Sed urna sapien, vulputate vel ligula a, venenatis posuere nulla. In pellentesque eros sed turpis venenatis, id tincidunt sem efficitur.</p>
            </div>

              <!-- Caja de comentarios

              <div class="form-group">
                <label for="message-text" class="form-control-label">Message:</label>
                <textarea class="form-control" id="message-text"></textarea>
              </div>
              -->
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger gradient" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success gradient">Guardar</button>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
        $('#altaUsuario').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.modal-title').text('New message to ' + recipient)
          modal.find('.modal-body input').val(recipient)
      })

    </script>


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
            ->select('proyecto.id','proyecto.nombre as nombre_proyecto','modulo.nombre as nombre_modulo','documentacion.nombre as nombre_avance','documentacion.imagen as imagen_avance','documentacion.comentario as comentario_avance')
            ->orderBy('id', 'asc')
            ->get();
          ?>

            @foreach($relacion as $r)
        <?php
                  $nombre_proyecto=substr($r->nombre_proyecto,1);
                  $nombre_proyecto = str_replace("}","",$nombre_proyecto);
                  if((strcmp(substr($nombre_proyecto,-1),'"'))==0){
                  $nombre_proyecto=substr($nombre_proyecto,1);
                  $nombre_proyecto = str_replace('"','',$nombre_proyecto);
                  }
                  
                  $nombre_modulo=substr($r->nombre_modulo,1);
                  $nombre_modulo = str_replace("}","",$nombre_modulo);
                  if((strcmp(substr($nombre_modulo,-1),'"'))==0){
                  $nombre_modulo=substr($nombre_modulo,1);
                  $nombre_modulo = str_replace('"','',$nombre_modulo);
                  }

                  $nombre_avance=substr($r->nombre_avance,1);
                  $nombre_avance = str_replace("}","",$nombre_avance);
                  if((strcmp(substr($nombre_avance,-1),'"'))==0){
                  $nombre_avance=substr($nombre_avance,1);
                  $nombre_avance = str_replace('"','',$nombre_avance);
                  }

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

            <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#infoModal" data-whatever="@mdo" style="margin-bottom: 5px;"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>

            <button type="button" class="btn btn-primary gradient" data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>

            @endif


          </td>
        </tr>
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