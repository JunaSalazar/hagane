<button type="button" class="btn btn-success gradient"  data-toggle="modal" data-target="#registroModulo" data-whatever="@mdo" style="margin-bottom: 25px;">Registrar avance</button>

    <div class="modal fade" id="registroModulo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Registro de avance</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <!--<span aria-hidden="true">&times;</span>-->
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="/avance/store">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Proyecto</label>
                <select class="form-control" id="idProyecto" name="id_proyecto">
                  {{ $avance_proyecto }}
                </select>
              </div>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Modulo</label>
                <select class="form-control" id="clienteEmpresa" name="id_modulo">
                  {{ $avance_proyecto_modulo }}
                </select>
              </div>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Nombre del avance</label>
                <input type="text" class="form-control" id="nombre_avance">
              </div>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Comentario</label>
                <textarea class="form-control" name="comentarioAvance" cols="40" rows="5"></textarea>
              </div>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Imagen de avance</label>
                {!! Form::file('imagen') !!}
              </div>

              <!-- Caja de comentarios

              <div class="form-group">
                <label for="message-text" class="form-control-label">Message:</label>
                <textarea class="form-control" id="message-text"></textarea>
              </div>
              -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger gradient" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success gradient">Guardar</button>
              </div>
            </form>
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