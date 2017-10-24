@extends('layout')

@section('content')

      <!-- FIN DE SECCIÓN DE PERFIL -->


<!-- Empieza Modal button (AGREGAR MODULOS A PROYECTOS)-->
    @component('avance.registroAvanceModal')
    @slot('avance_proyecto')
    @foreach($proyectos as $p)
    <?php 
                $nombre=substr($p->nombre,1);
                $nombre = str_replace("}","",$nombre);
                if((strcmp(substr($nombre,-1),'"'))==0){
                  $nombre=substr($nombre,1);
                  $nombre = str_replace('"','',$nombre);
                }

                $id = $p->id;

    ?>
    <option value = '{{ $id }}'>{{ $nombre }}</option>
    @endforeach
    @endslot

    @slot('avance_proyecto_modulo')
    <?php
      $relacion = DB::table('proyecto')
            ->join('modulo', 'proyecto.id', '=', 'modulo.id_proyecto')
            ->select('modulo.id','modulo.nombre')
            ->get();
    ?>
      @foreach($relacion as $r)
        <?php
        // $id_proyecto = $_GET['id_proyecto'];
        // if($id_proyecto == $r->id){
          $nombre_modulo=substr($r->nombre,1);
                $nombre_modulo = str_replace("}","",$nombre_modulo);
                if((strcmp(substr($nombre_modulo,-1),'"'))==0){
                  $nombre_modulo=substr($nombre_modulo,1);
                  $nombre_modulo = str_replace('"','',$nombre_modulo);
                }

                $id_modulo = $r->id;
        // }
                
        ?>
    <option value = '{{ $id_modulo }}'>{{ $nombre_modulo }}</option>
      @endforeach
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

@foreach($avances as $a)
  {!! Html::image('imagen/'.$a->imagen,'imagen',['class'=>'imagen']) !!}
@endforeach

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre de proyecto</th>
                <th>Nombre de avance</th>
                <th>Comentario</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre de proyecto</th>
                <th>Nombre de avance</th>
                <th>Comentario</th>
                <th>Imagen</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>PROYECTO 1</td>
                <td>AVANCE 1</td>
                <td>Este es un avance para este proyecto</td>
                <td><button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#pruebaModulo" data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></button>
                </td>
            </tr> 
            <tr>
                <td></td>
                <td>AVANCE 2</td>
                <td>Este es un avance para este proyecto</td>
                <td><button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#pruebaModulo" data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></button></td>
            </tr>
            <tr>
                <td>PROYECTO 2</td>
                <td>AVANCE 1</td>
                <td>Este es un avance para este proyecto</td>
                <td><button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#pruebaModulo" data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></button></td>
            </tr>
            <tr>
                <td></td>
                <td>AVANCE 2</td>
                <td>Este es un avance para este proyecto</td>
                <td>{{-- <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#pruebaModulo" data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></button> --}}</td>
            </tr>
            <tr>
                <td></td>
                <td>AVANCE 3</td>
                <td>Este es un avance para este proyecto</td>
                <td><button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#pruebaModulo" data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></button></td>
            </tr>           
        </tbody>
</table>      

<!-- <script type="text/javascript">
  
  $(document).ready(function() {
    $('#example').DataTable();
  } );

</script> -->


<!-- -->

@stop