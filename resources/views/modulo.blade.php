@extends('layout')

@section('content')

      <!-- FIN DE SECCIÓN DE PERFIL -->

      <!-- PARA ACOMODAR BOTONES EN LA PANTALLA >>>>>>>> ESTE ES PARA PONERLO EN LA DERECHA "pull-right" -->


<!-- Empieza Modal button (AGREGAR MODULOS A PROYECTOS)-->
    <button type="button" class="btn btn-success gradient"  data-toggle="modal" data-target="#registroModulo" data-whatever="@mdo" style="margin-bottom: 25px;">Registrar modulo</button>

    <div class="modal fade" id="registroModulo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Alta de módulos</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <!--<span aria-hidden="true">&times;</span>-->
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Nombre del módulo</label>
                <input type="text" class="form-control" id="nombreModulo" minlength="8" maxlength="20">
              </div>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Proyecto a añadir el módulo</label>
                <select id="proyectoModulo" class="form-control">
                  <option>NO</option>
                  <option>HAY</option>
                  <option>NADA</option>
                  <option>AÚN</option>
                </select>
              </div>

              <p><b>Nivel de importancia:</b></p>
              <form>
              <div class="radio">
                <label><input type="radio" name="optradio" id="importanciaModulo">BAJO</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="optradio" id="importanicaModulo">MEDIO</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="optradio" id="importanciaModulo">ALTO</label>
              </div>
              </form>

              <div class="half left cf">
              <label for="recipient-name" class="form-control-label">Responsable del módulo</label>
                <select id="responsableModulo" class="form-control">
                  <option>Erick Castillo</option>
                  <option>Erick Valdez</option>
                  <option>Juan Salazar</option>
                  <option>Luis García</option>
                </select>
              </div>
              <div class="half right cf">
                <label for="recipient-name" class="form-control-label">Progreso del módulo</label>
                <input type="number" class="form-control" id="progresoModulo"><p>%</p>
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




    <!-- **************************************************************************************************
    ////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Datos del módulo</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <!--<span aria-hidden="true">&times;</span>-->
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Nombre del módulo</label>
                <p>MODULO 1</p>
              </div>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Proyecto al que pertenece</label>
                <p>Aplicación Móvil</p>
              </div>

              <label for="recipient-name" class="form-control-label">Nivel de importancia</label>
              <p>BAJO</p>

              <div class="half left cf">
              <label for="recipient-name" class="form-control-label">Responsable del módulo</label>
                <p>Erick Castillo</p>
                <p>Carlos Salazar</p>
              </div>
              <div class="half right cf">
                <label for="recipient-name" class="form-control-label">Progreso del módulo</label>
                <p>50%</p>
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
          </div>
        </div>
      </div>
    </div>
<!--     \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    ************************************************************************************************** -->

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Proyecto al que pertenece</th>
                <th>Nombre del módulo</th>
                <th>Nivel de importancia</th>
                <th>Responsable(s) del módulo</th>
                <th>Progreso del módulo</th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Proyecto al que pertenece</th>
                <th>Nombre del módulo</th>
                <th>Nivel de importancia</th>
                <th>Responsable(s) del módulo</th>
                <th>Progreso del módulo</th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>Aplicación Móvil</td>
                <td>MÓDULO 1</td>
                <td>BAJO</td>
                <td>Erick Castillo/Carlos Salazar</td>
                <td>50%</td>
                <td>


                  <span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>


                </td>
            </tr>
            <tr>
                <td></td>
                <td>MÓDULO 2</td>
                <td>MEDIO</td>
                <td>Erick Castillo/Erick Valdez</td>
                <td>20%</td>
                <td>
                  <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#infoModal" data-whatever="@mdo" style="margin-bottom: 5px;"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>

                  <button type="button" class="btn btn-primary gradient"  {{-- data-toggle="modal" --}} {{-- data-target="#registroModulo" --}} data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>


                  {{-- <span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> --}}


                </td>
            </tr>
            <tr>
                <td></td>
                <td>MÓDULO 3</td>
                <td>ALTO</td>
                <td>Erick Castillo/Erick Valdez</td>
                <td>20%</td>
                <td>
                  <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#infoModal" data-whatever="@mdo" style="margin-bottom: 5px;"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>

                  <button type="button" class="btn btn-primary gradient"  {{-- data-toggle="modal" --}} {{-- data-target="#registroModulo" --}} data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>


                  {{-- <span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> --}}


                </td>
            </tr>
            <tr>
                <td>Aplicación Web</td>
                <td>MÓDULO 1</td>
                <td>BAJO</td>
                <td>Erick Castillo/Carlos Salazar</td>
                <td>50%</td>
                <td>
                  <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#infoModal" data-whatever="@mdo" style="margin-bottom: 5px;"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>

                  <button type="button" class="btn btn-primary gradient"  {{-- data-toggle="modal" --}} {{-- data-target="#registroModulo" --}} data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>


                  {{-- <span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> --}}


                </td>
            </tr>
            <tr>
                <td></td>
                <td>MÓDULO 2</td>
                <td>MEDIO</td>
                <td>Erick Castillo/Erick Valdez</td>
                <td>20%</td>
                <td>
                  <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#infoModal" data-whatever="@mdo" style="margin-bottom: 5px;"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>

                  <button type="button" class="btn btn-primary gradient"  {{-- data-toggle="modal" --}} {{-- data-target="#registroModulo" --}} data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>


                  {{-- <span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> --}}


                </td>
            </tr>
            <tr>
                <td></td>
                <td>MÓDULO 3</td>
                <td>ALTO</td>
                <td>Erick Castillo/Erick Valdez</td>
                <td>20%</td>
                <td>
                  <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#infoModal" data-whatever="@mdo" style="margin-bottom: 5px;"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>

                  <button type="button" class="btn btn-primary gradient"  {{-- data-toggle="modal" --}} {{-- data-target="#registroModulo" --}} data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>


                  {{-- <span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> --}}


                </td>
            </tr>
        </tbody>
</table>      

<!-- <script type="text/javascript">
  
  $(document).ready(function() {
    $('#example').DataTable();
  } );

</script> -->

@stop