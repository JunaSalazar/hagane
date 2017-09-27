@extends('layout')

@section('content')

      <!-- FIN DE SECCIÓN DE PERFIL -->


<!-- Empieza Modal button (AGREGAR MODULOS A PROYECTOS)-->
    <button type="button" class="btn btn-success gradient"  data-toggle="modal" data-target="#registroModulo" data-whatever="@mdo" style="margin-bottom: 25px;">Registrar prueba</button>

    <div class="modal fade" id="registroModulo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Registro de prueba</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <!--<span aria-hidden="true">&times;</span>-->
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Proyecto</label>
                <select id="proyectoAvance" class="form-control">
                  <option>PROYECTO 1</option>
                  <option>PROYECTO 2</option>
                  <option>PROYECTO 3</option>
                  <option>PROYECTO 4</option>
                </select>
              </div>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Nombre del avance</label>
                <input type="text" class="form-control" id="nombreAvance">
              </div>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Comentario</label>
                <textarea class="form-control" name="comentarioAvance" cols="40" rows="5"></textarea>
              </div>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Imagen de prueba</label>
                <input id="fileInput" type="file" style="display:none;" />
<input type="button" value="Elegir archivo" onclick="document.getElementById('fileInput').click();" />
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


    <!-- Termina Modal button (AGREGAR MODULOS A PROYECTOS)-->

<!-- MODAL PRUEBA VER IMÁGEN
**************************************************************************************************************************************************-->






<!-- Empieza Modal button (AGREGAR MODULOS A PROYECTOS)-->
    <button type="button" class="btn btn-success gradient"  data-toggle="modal" data-target="#pruebaModulo" data-whatever="@mdo" style="margin-bottom: 25px;">Prueba de imágen y comentario</button>

    <div class="modal fade" id="pruebaModulo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">PRUEBA</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <!--<span aria-hidden="true">&times;</span>-->
            </button>
          </div>
          <div class="modal-body">
            <form>

            <div class="half left cf">
              <img src="iconoImagen.png" style="width:250px; height:250px;">
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
                <td><img src="iconoImagen.png" style="width:25px; height:25px;"></td>
            </tr> 
            <tr>
                <td></td>
                <td>AVANCE 2</td>
                <td>Este es un avance para este proyecto</td>
                <td><img src="iconoImagen.png" style="width:25px; height:25px;"></td>
            </tr>
            <tr>
                <td>PROYECTO 2</td>
                <td>AVANCE 1</td>
                <td>Este es un avance para este proyecto</td>
                <td><img src="iconoImagen.png" style="width:25px; height:25px;"></td>
            </tr>
            <tr>
                <td></td>
                <td>AVANCE 2</td>
                <td>Este es un avance para este proyecto</td>
                <td> </td>
            </tr>
            <tr>
                <td></td>
                <td>AVANCE 3</td>
                <td>Este es un avance para este proyecto</td>
                <td><img src="iconoImagen.png" style="width:25px; height:25px;"></td>
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