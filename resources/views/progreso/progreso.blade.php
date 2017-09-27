@extends('layout')

@section('content')

      <!-- FIN DE SECCIÓN DE PERFIL -->

    <!-- Empieza Modal button (Alta de cliente)-->
    <button type="button" class="btn btn-success gradient"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="margin-bottom: 25px;">Progreso</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Progreso total del proyecto</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <!--<span aria-hidden="true">&times;</span>-->
            </button>
          </div>
          <div class="modal-body">
            <form>

            <div class="form-group">
                <label form="recipient-name" class="form-control-label">Progreso total</label>
                <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 20%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <div class="form-group">
                <label form="recipient-name" class="form-control-label">Detalle por módulo</label>
                <div class="scroll">
              <table id="modulos" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <tbody>
              <thead>
              <tr>
                <th>Nombre de módulo</th>
                <th>Responsable del módulo</th>
                <th>Nivel del módulo</th>
                <th>Progreso del módulo</th>
                <th></th>
              </tr>
              </thead>
                  <tr>
                    <td>MODULO 1</td>
                    <td>Erick Castillo</td>
                    <td>BAJO</td>
                    <td>20%</td>
                    <td><span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
                  </tr>
                  <tr>
                    <td>MODULO 2</td>
                    <td>Juan Valdez</td>
                    <td>BAJO</td>
                    <td>70%</td>
                    <td><span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
                  </tr>
                  <tr>
                    <td>MODULO 3</td>
                    <td>Carlos Salazar</td>
                    <td>ALTO</td>
                   <td>99%</td>
                   <td><span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
                 </tr>
                 <tr>
                    <td>MODULO 3</td>
                    <td>Carlos Salazar</td>
                    <td>ALTO</td>
                   <td>99%</td>
                   <td><span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
                 </tr>
                 <tr>
                    <td>MODULO 3</td>
                    <td>Carlos Salazar</td>
                    <td>ALTO</td>
                   <td>99%</td>
                   <td><span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
                 </tr>
                 <tr>
                    <td>MODULO 3</td>
                    <td>Carlos Salazar</td>
                    <td>ALTO</td>
                   <td>99%</td>
                   <td><span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
                 </tr>
                 <tr>
                    <td>MODULO 3</td>
                    <td>Carlos Salazar</td>
                    <td>ALTO</td>
                   <td>99%</td>
                   <td><span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
                 </tr>
                 <tr>
                    <td>MODULO 3</td>
                    <td>Carlos Salazar</td>
                    <td>ALTO</td>
                   <td>99%</td>
                   <td><span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
                 </tr>

               </tbody>
            </table>
            </div>
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

    </script>


    <!-- Termina Modal button (Alta de cliente)-->

    <!-- -->

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre de proyecto</th>
                <th>Fecha de inicio</th>
                <th>Fecha final</th>
                <th>Progreso total</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre de proyecto</th>
                <th>Fecha de inicio</th>
                <th>Fecha final</th>
                <th>Progreso total</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>Aplicación movil"Comiditas"</td>
                <td>25/06/2017</td>
                <td>28/09/2018</td>
                <td>20%</td>
            </tr>
            <tr>
                <td>Automatización de jardín botánico</td>
                <td>25/06/2018</td>
                <td>28/09/2018</td>
                <td>0%</td>
            </tr>
            <tr>
                <td>Desarrollo de aplicación móvil</td>
                <td>25/06/2019</td>
                <td>28/09/2020</td>
                <td>0%</td>
            </tr>

        </tbody>
</table>      

<script type="text/javascript">
  
  $(document).ready(function() {
    $('#example').DataTable();
  } );

</script>

@stop