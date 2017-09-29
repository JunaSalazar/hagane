<button type="button" class="btn btn-success gradient"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="margin-bottom: 25px;">Registrar proyecto</button>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Alta de proyecto</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/proyecto">
          <div class="form-group">
            <label for="sel1">Cliente:</label>
            <select class="form-control" id="sel1">
              <option></option>
              <option>Cliente1</option>
              <option>Cliente2</option>
              <option>Cliente</option>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Nombre del proyecto</label>
            <input type="text" class="form-control" id="usuarioCliente" minlength="8" maxlength="20" name="nombre">
          </div>
          <p><b>¿Se ha cotizado?</b></p>
          <form>
            <div class="radio" name="cotizado">
              <label><input type="radio" name="optradio" id="cotizado">SI</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="optradio" id="cotizado">NO</label>
            </div>
          </form>
          <p><b>¿Se ha entregado?</b></p>
          <form>
            <div class="radio" name="entregado">
              <label><input type="radio" name="optradio" id="entregado">SI</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="optradio" id="entregado">NO</label>
            </div>
            </form>

            <div class="row">
              <div class="col-8 col-sm-4">
                <div class="form-group">
                  <div class="controls">
                    <div class="form-group" style="width: 170px;" >
                      <label for="recipient-name" class="form-control-label">Fecha de inicialización:</label>
                      <input id="mi_calendario" type="text" class="mi_calendario form-control" name="fechaInicio" />
                      <label for="mi_calendario" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4 col-sm-4">
                <div class="form-group">
                  <div class="controls">
                    <div class="form-group" style="width: 170px;" >
                      <label for="recipient-name" class="form-control-label">Fecha de finalización:</label>
                      <input id="mi_calendario2" type="text" class="mi_calendario form-control" name="fechaFinal" />
                      <label for="mi_calendario2" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <script>
              $( ".mi_calendario" ).datepicker({
              // Formato de la fecha
              dateFormat: "dd/mm/yy",
              // Primer dia de la semana - lunes
              firstDay: 1,
              // Días largo traducido
              dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
              // Dias cortos traducido
              dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
              // Nombres largos de los meses traducido
              monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
              // Nombres cortos de los meses traducido 
              monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dec" ],
              // Al selecconar fecha, se escribe en el campo de texto
              onSelect: function(dateText) { 
                $('#fecha').val(dateText);
              }
            });
          </script>

          <script>
            $( ".mi_calendario2" ).datepicker({
            // Formato de la fecha
            dateFormat: "dd/mm/yy",
            // Primer dia de la semana - lunes
            firstDay: 1,
            // Días largo traducido
            dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
            // Dias cortos traducido
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
            // Nombres largos de los meses traducido
            monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
            // Nombres cortos de los meses traducido 
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dec" ],
            // Al selecconar fecha, se escribe en el campo de texto
            onSelect: function(dateText) { 
              $('#fecha').val(dateText);
            }
          });
        </script>
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