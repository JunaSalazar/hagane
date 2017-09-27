@extends('layout')

@section('content')

      <!-- FIN DE SECCIÓN DE PERFIL -->

    <!-- Empieza Modal button (Alta de cliente)-->
    <button type="button" class="btn btn-success gradient"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="margin-bottom: 25px;">Registrar contacto</button>

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
            <form>

            <div class="half left cf">
              <label for="recipient-name" class="form-control-label">Fecha</label>
              <input type="text" class="form-control" id="ciudadEmpresa" maxlength="20">
            </div>
            <div class="half right cf">
              <label for="recipient-name" class="form-control-label">Hora</label>
              <input type="text" class="form-control" id="ciudadEmpresa" maxlength="20">
            </div>

            <div class="form-group">
                <label form="recipient-name" class="form-control-label">Cliente</label>
                <select class="form-control" id="paisEmpresa">
                  <option>Juan Soza</option>
                  <option>Homero García</option>
                  <option>Cesar Salazar</option>
                </select>
            </div>

            <div class="form-group">
                <label form="recipient-name" class="form-control-label">Comentario</label>
                <textarea class="form-control" name="comentarioContacto" cols="40" rows="5"></textarea>
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


    <!-- Termina Modal button (Alta de cliente)-->

    <!-- -->

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Cliente</th>
                <th>Comentario</th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Cliente</th>
                <th>Comentario</th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>27/08/2017</td>
                <td>08:30pm</td>
                <td>Juan Soza</td>
                <td>Se hizo cita para...</td>
                <td>

                  <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#infoModal" data-whatever="@mdo" style="margin-bottom: 5px;"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>

                  <button type="button" class="btn btn-primary gradient"  {{-- data-toggle="modal" --}} {{-- data-target="#registroModulo" --}} data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>


                  {{-- <span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> --}}


                </td>
            </tr>
            <tr>
                <td>26/08/2017</td>
                <td>01:30pm</td>
                <td>Juan Soza</td>
                <td>Se definieron...</td>
                <td>

                  <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#infoModal" data-whatever="@mdo" style="margin-bottom: 5px;"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>

                  <button type="button" class="btn btn-primary gradient"  {{-- data-toggle="modal" --}} {{-- data-target="#registroModulo" --}} data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>


                  {{-- <span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> --}}


                </td>
            </tr>
            <tr>
                <td>25/08/2017</td>
                <td>02:30pm</td>
                <td>Juan Soza</td>
                <td>Se comunicó con cliente para...</td>
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