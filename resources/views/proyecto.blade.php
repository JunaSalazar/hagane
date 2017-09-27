@extends('layout')

@section('content')

    <!-- Empieza Modal button (Alta de proyecto)-->
    <button type="button" class="btn btn-success gradient"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="margin-bottom: 25px;">Registrar proyecto</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Alta de proyecto</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <!--<span aria-hidden="true">&times;</span>-->
            </button>
          </div>
          <div class="modal-body">
            <form>

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
                <input type="text" class="form-control" id="usuarioCliente" 
               minlength="8" maxlength="20">
              </div>

              <p><b>¿Se ha cotizado?</b></p>
              <form>
              <div class="radio">
                <label><input type="radio" name="optradio" id="cotizado">SI</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="optradio" id="cotizado">NO</label>
              </div>
              </form>

              <p><b>¿Se ha entregado?</b></p>
              <form>
              <div class="radio">
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
                               <input id="mi_calendario" type="text" class="mi_calendario form-control" />
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
                               <input id="mi_calendario2" type="text" class="mi_calendario form-control" />
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


    <!-- Termina Modal button (Alta de cliente)-->

<!-- Empieza Modal button (AGREGAR MODULOS A PROYECTOS)-->
    <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#registroModulo" data-whatever="@mdo" style="margin-bottom: 25px;">Registrar modulo</button>

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
                <select class="form-control" id="sel1">
                  <option></option>
                  <option>Proyecto1</option>
                  <option>Proyecto2</option>
                  <option>Proyecto3</option>
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


    <!-- Termina Modal button (AGREGAR MODULOS A PROYECTOS)-->
    <!-- ****************************************************** -->
<div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Datos del proyecto</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <!--<span aria-hidden="true">&times;</span>-->
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Nombre del proyecto</label>
                <p>Desarrollo de aplicación movil</p>
              </div>

              <p><b>¿Se ha cotizado?</b></p>
              <p>SI</p>

              <p><b>¿Se ha entregado?</b></p>
              <p>NO</p>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Fecha de inicio</label>
                <p>22/07/2012</p>
              </div>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Fecha final</label>
                <p>25/05/2018</p>
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



    <!-- ****************************************************** -->
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Feha de inicio</th>
                <th>Feha final</th>
                <th>Duración</th>
                <th>Cotizado</th>
                <th>Entregado</th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Feha de inicio</th>
                <th>Feha final</th>
                <th>Duración</th>
                <th>Cotizado</th>
                <th>Entregado</th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>

          @foreach($proyectos as $p)
          <tr>
                <?php 
                $nombre=substr($p->nombre,1);
                $nombre = str_replace("}","",$nombre);
                ?>
                <td>{{ $nombre }}</td>
                <td>{{ $p->fechainicio }}</td>
                <td>{{ $p->fechafinal }}</td>
                <td>{{ $p->duracion }}</td>
                <?php 
                $cotizado=substr($p->cotizado,1);
                $cotizado = str_replace("}","",$cotizado);
                ?>
                <td>{{ $cotizado }}</td>
                <?php 
                $entregado=substr($p->entregado,1);
                $entregado = str_replace("}","",$entregado);
                ?>
                <td>{{ $entregado }}</td>
                <td>
                  <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#infoModal" data-whatever="@mdo" style="margin-bottom: 5px;"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>

                  <button type="button" class="btn btn-primary gradient" data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>

                </td>
            </tr>
            @endforeach
        </tbody>
</table>

@stop