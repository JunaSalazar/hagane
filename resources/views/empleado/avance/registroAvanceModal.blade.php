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
            <form method="post" action="/avance/store" enctype="multipart/form-data">
              {{ csrf_field() }}

              {{ $relacion_subcategory }}

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Nombre del avance</label>
                <input type="text" class="form-control" name="nombre_avance" required>
              </div>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Comentario</label>
                <textarea class="form-control" name="comentario_avance" cols="40" rows="5"></textarea>
              </div>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Imagen de avance</label>
                <input type="file" id="imagen_avance" class="maxsize" name="image"  accept=".jpg, .jpeg, .png">
              </div>
              {{-- SE TIENE COMO LÍMITE 2MB PORQUE EN EL PHP.INI EN LA PARTE DE upload_max_file ASÍ LO MARCA --}}
              <script>
                var uploadField = document.getElementById("imagen_avance");
                uploadField.onchange = function() {
                if(this.files[0].size > 2097152){
                alert('El archivo es mayor a 2MB. Elige un archivo con menor peso porfavor')
                this.value = "";
                };
                };
              </script>

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