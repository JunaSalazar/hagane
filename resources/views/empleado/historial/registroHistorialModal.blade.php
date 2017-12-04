<button type="button" class="btn btn-success gradient"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="margin-bottom: 25px;">Registrar contacto</button>


    <style>
      #hora_historial{
      width:70px;   
      }
      
      #hora_historial option{
      width:70px;   
      }

      #minuto_historial{
      width:70px;   
      }
      
      #minuto_historial option{
      width:70px;   
      }

      #tiempo_historial{
      width:70px;   
      }
      
      #tiempo_historial option{
      width:70px;   
      }

    </style>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Alta de contacto</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <!--<span aria-hidden="true">&times;</span>-->
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="/historial/store">
              {{ csrf_field() }}

            <div class="half left cf">
              <label for="recipient-name" class="form-control-label">Fecha</label>
              <input id="mi_calendario" type="text" class="mi_calendario form-control" name="fecha_contacto" required />
              <label for="mi_calendario" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>
            </div>
            <div class="half right cf">
              <label for="recipient-name" class="form-control-label">Hora</label>
              <div class="form-inline">
              <div class="form-group">
              <select class="form-control" id="hora_historial" name="hora_historial" required>
                <option value = '01'>01</option>
                <option value = '02'>02</option>
                <option value = '03'>03</option>
                <option value = '04'>04</option>
                <option value = '05'>05</option>
                <option value = '06'>06</option>
                <option value = '07'>07</option>
                <option value = '08'>08</option>
                <option value = '09'>09</option>
                <option value = '10'>10</option>
                <option value = '11'>11</option>
                <option value = '12'>12</option>
              </select> 
              :
              <select class="form-control" id="minuto_historial" name="minuto_historial" required>
                <option value = '00'>00</option>
                <option value = '05'>05</option>
                <option value = '10'>10</option>
                <option value = '15'>15</option>
                <option value = '20'>20</option>
                <option value = '25'>25</option>
                <option value = '30'>30</option>
                <option value = '35'>35</option>
                <option value = '40'>40</option>
                <option value = '45'>45</option>
                <option value = '50'>50</option>
                <option value = '55'>55</option>
              </select>
              <select class="form-control" id="tiempo_historial" name="tiempo_historial" required>
                <option value = 'am'>am</option>
                <option value = 'pm'>pm</option>
              </select>
            </div>
          </div>
              {{-- <input type="text" class="form-control" id="ciudadEmpresa" maxlength="20"> --}}
            </div>

            <div class="form-group">
                <label form="recipient-name" class="form-control-label">Cliente</label>
                <select class="form-control" id="clientes_registrados" name="id_cliente">
                  {{ $nombre_clientes }}
                </select>
            </div>

            <div class="form-group">
                <label form="recipient-name" class="form-control-label">Comentario</label>
                <textarea class="form-control" name="comentario_contacto" cols="40" rows="5" required></textarea>
            </div>

              <div class="modal-footer">
                <button type ="button" class="btn btn-danger gradient" data-dismiss="modal">Cerrar</button>
                <button type ="submit" class="btn btn-success gradient">Guardar</button>
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

    <script>
                $( ".mi_calendario" ).datepicker({
                // Formato de la fecha
                dateFormat: 'dd/mm/yy',
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