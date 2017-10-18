<button type="button" class="btn btn-success gradient"  data-toggle="modal" data-target="#registroModulo" data-whatever="@mdo" style="margin-bottom: 25px;">Registrar modulo</button>

    <div class="modal fade" id="registroModulo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="registroModulo">Registro de módulos</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <!--<span aria-hidden="true">&times;</span>-->
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="sel1">Seleccione el proyecto:</label>
                <select class="form-control" id="clienteEmpresa" name="id_proyecto">
                  {{ $nombre_proyecto }}
                </select>
              </div>
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Cantidad de módulos:</label>
                <button type="button" class="btn btn-default" style="margin-left: 10px; width: 35px;">-</button>
                <label for="recipient-name" class="form-control-label">1</label>
                <button type="button" class="btn btn-default" style="width: 35px;">+</button>
              </div>

          <div class="form-group">
                <h4 class="text-primary"><label for="recipient-name" class="form-control-label">Módulo 1</label></h4>

                <div class="form-group">
                <label for="recipient-name" class="form-control-label">Cantidad de encargados:</label>
                <button type="button" class="btn btn-default" style="margin-left: 10px; width: 35px;">-</button>
                <label for="recipient-name" class="form-control-label">1</label>
                <button type="button" class="btn btn-default" style="width: 35px;">+</button>
              </div>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Nombre del módulo</label>
                <input type="text" class="form-control" id="nombreModulo" minlength="8" maxlength="20">
              </div>

              <div class="form-group">
                  <label for="sel1">Responsable:</label>
                      <select class="form-control" id="seleccion_responsable" style="width:200px;">
                          <option></option>
                          <option>Empleado1</option>
                          <option>Empleado2</option>
                          <option>Empleado3</option>
                      </select>
               </div>
              <div class="row">
                <div class="col-8 col-sm-4">
                      <div class="form-group">
                        <label for="recipient-name" class="form-control-label" style="width:140px;">Peso en el proyecto:</label>
                              <div class="input-group" style="width:120px; ">
                                <input type="number" class="form-control" id="progresoModulo">
                                <span class="input-group-addon" id="peso_proyecto">%</span>
                              </div>
                      </div>
                </div>
                <div class="col-4 col-sm-4">
                      <div class="form-group">
                          <label for="sel1">Nivel de importancia:</label>
                              <select class="form-control" id="seleccion_responsable" style="width:100px;">
                                  <option></option>
                                  <option>Bajo</option>
                                  <option>Medio</option>
                                  <option>Alto</option>
                              </select>
                      </div>
                </div>
              </div> 
          </div>
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