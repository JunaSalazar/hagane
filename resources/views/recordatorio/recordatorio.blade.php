@extends('layout')

@section('content')

      <!-- FIN DE SECCIÓN DE PERFIL -->

    <!-- Empieza Modal button (Alta de cliente)-->
    <button type="button" class="btn btn-success gradient"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="margin-bottom: 25px;">Registrar recordatorio</button>

     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Alta de empresa</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <!--<span aria-hidden="true">&times;</span>-->
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Evento</label>
                <input type="text" class="form-control" id="eventoRecordatorio" minlength="8" maxlength="20">
              </div>

              <div class="form-group">
                <label form="recipient-name" class="form-control-label">Motivo</label>                
                <select class="form-control" id="motivoRecordatorio">
                  <option>Seguimiento de proyecto</option>
                  <option>Contacto con cliente</option>
                  <option>Agendar cita</option>
                </select>
              </div>

              <div class="half left cf">
              <label for="recipient-name" class="form-control-label">Fecha</label>
                <input type="text" class="form-control" id="fechaRecordatorio" maxlength="20">              
              </div>

              <div class="half right cf">
                <label for="recipient-name" class="form-control-label">Hora</label>
                <input type="text" class="form-control" id="horaRecordatorio" maxlength="20">
              </div>

              <p><b>Frecuencia</b></p>
              <div class="half left cf">
              <div class="half left cf">
                <input type="number" class="form-control" id="numeroRecordatorio" maxlength="20">
              </div>
              <div class="half right cf">
                <select class="form-control" id="frecuenciaRecordatorio">
                  <option>Día(s)</option>
                  <option>Semana(s)</option>
                  <option>Mes(es)</option>
                  <option>Año(s)</option>
                </select>
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


    <!-- Termina Modal button (Alta de cliente)-->

    <!-- -->

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Evento</th>
                <th>Motivo</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Frecuencia</th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Evento</th>
                <th>Motivo</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Frecuencia</th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>Comunicarse con el señor García para seguimiento de la app "Comiditas"</td>
                <td>Seguimiento de proyecto</td>
                <td>03/09/2017</td>
                <td>12:00pm</td>
                <td>Cada 3 meses</td>
                <td>
                  <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#infoModal" data-whatever="@mdo" style="margin-bottom: 5px;"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>

                  <button type="button" class="btn btn-primary gradient"  {{-- data-toggle="modal" --}} {{-- data-target="#registroModulo" --}} data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>


                  {{-- <span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> --}}


                </td>
            </tr>
            <tr>
                <td>Junta con el cliente Mota</td>
                <td>Agendar cita</td>
                <td>15/09/2017</td>
                <td>07:00pm</td>
                <td>Cada 2 semanas</td>
                <td>
                  <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#infoModal" data-whatever="@mdo" style="margin-bottom: 5px;"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>

                  <button type="button" class="btn btn-primary gradient"  {{-- data-toggle="modal" --}} {{-- data-target="#registroModulo" --}} data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>


                  {{-- <span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> --}}


                </td>
            </tr>
            <tr>
                <td>Mantener contacto con González de Softtek</td>
                <td>Contacto con el cliente</td>
                <td>02/08/2017</td>
                <td>02:00pm</td>
                <td>Cada 2 días</td>
                <td>
                  <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#infoModal" data-whatever="@mdo" style="margin-bottom: 5px;"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>

                  <button type="button" class="btn btn-primary gradient"  {{-- data-toggle="modal" --}} {{-- data-target="#registroModulo" --}} data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>


                  {{-- <span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> --}}


                </td>
            </tr>
        </tbody>
</table>

<script type="text/javascript">
  
  $(document).ready(function() {
    $('#example').DataTable();
  } );

</script>

@stop