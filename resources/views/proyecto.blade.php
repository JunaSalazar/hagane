<!DOCTYPE html>
<html>
<!-- 
*************************************************
AQUÍ SE OBSERVAN LAS CARACTERÍSTICAS DE LOS PROYECTOS
************************************************* 
-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hagane</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap2.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/separacionIzqDere.css') }}">
    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/script.min.js') }}"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">  
    <script src="{{ URL::asset('js/Dynamic-Table.js') }}"></script>
    <script src="{{ URL::asset('js/Sidebar-Menu.js') }}"></script>

    <script src="{{ URL::asset('js/jquery.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('js/dataTables.bootstrap.min.js') }}"></script>

    <!-- Empieza Date Picker -->
      
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/flick/jquery-ui.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.theme.min.css') }}">
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

    <!-- Termina Date Picker -->


<style>
#progresoModulo{
    width: 80px;
}
</style>
</head>

<body>
    <!--
    <nav class="navbar navbar-default custom-header" style="margin-bottom: 50px;">
        <div class="container-fluid">
            <div class="navbar-header"><a href="#"><img src="logo.png" alt="" style="margin-right: 40px;"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><span class="sr-only"></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav links">
                    <li><a href="#">Alta de usuarios</a></li>
                    <li><a href="#">Clientes</a></li>
                    <li><a href="#">Proyectos </a></li>
                    
                </ul>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Sony <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Tablet</a></li>
                      <li><a href="#">Smartphone</a></li>
                    </ul>
                </div>

                

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"> <span class="caret"></span><img src="assets/img/avatar.jpg" class="dropdown-image"></a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li role="presentation"><a href="#">Perfil </a></li>
                            <li role="presentation" class="active"><a href="#">Cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    -->

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index.html"><img src="{{URL::asset('img/logo.png')}}" alt="" style="margin-right: 40px;"></a> 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
        
        <!-- 


        MENÚ DROPDOWN

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="">Usuarios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Clientes</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="empleado.html">Empleados</a></li>
          </ul>
        </li> -->

        <li class=""><a href="{{ url('empresa') }}">Empresas<span class="sr-only">(current)</span></a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>Cliente</span><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('cliente') }}">Ver clientes</a></li>
            <li><a href="{{ url('relacionProyectoCliente') }}">Clientes y sus proyectos</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>Proyecto</span><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('proyecto') }}">Ver proyectos</a></li>
            <li><a href="{{ url('modulo') }}">Módulos</a></li>
            <li><a href="{{ url('progreso') }}">Progreso de proyectos</a></li>
            <li><a href="{{ url('avance') }}">Documentos de avances</a></li>
          </ul>
        </li>

        <li class=""><a href="{{ url('historial') }}">Historial de contacto<span class="sr-only">(current)</span></a></li>

        <li class=""><a href="{{ url('recordatorio') }}">Recordatorios<span class="sr-only">(current)</span></a></li>
<!-- 
        <li role="presentation"><a href="proyecto.html">Proyectos </a></li>
                    <li role="presentation"><a href="cliente.html">Clientes </a></li>
                    <li role="presentation"><a href="empresa.html">Empresas </a></li>
                    <li role="presentation"><a href="historial.html">Historial de contacto </a></li>
                    <li role="presentation"><a href="#">Línea de tiempo </a></li> -->

      </ul>
      
      <!-- INICIO DE SECCIÓN DE PERFIL -->

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Perfil</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Cerrar sesión</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

      <!-- FIN DE SECCIÓN DE PERFIL -->

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

<!-- Empieza Modal button (AGREGAR MODULOS A PROYECTOS)***********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
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

    <!--************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************** -->



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
            <tr>
                <td>Desarrollo de aplicación movil</td>
                <td>22/07/2012</td>
                <td>25/05/2018</td>
                <td>5 semanas</td>
                <td>Si</td>
                <td>No</td>
                <td><span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
            </tr>
            <tr>
                <td>Desarrollo de sistema de control de avances de proyectos para clientes registrados en ambiente web.</td>
                <td>22/07/2012</td>
                <td>22/05/2020</td>
                <td>5 semanas</td>
                <td>Si</td>
                <td>No</td>
                <td><span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
            </tr>
            <tr>
                <td>Automatización de jardín botánico</td>
                <td>22/07/2012</td>
                <td>04/09/2020</td>
                <td>3 días</td>
                <td>Si</td>
                <td>Si</td>
                <td><span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
            </tr>
            <tr>
                <td>Aplicación movil "Comiditas"</td>
                <td>22/07/2012</td>
                <td>05/09/2018</td>
                <td>5 Meses</td>
                <td>Si</td>
                <td>Si</td>
                <td><span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
            </tr>
            <tr>
                <td>Desarrollo de aplicación Web</td>
                <td>22/07/2012</td>
                <td>04/09/2014</td>
                <td>5 meses</td>
                <td>No</td>
                <td>No</td>
                <td><span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
            </tr>
        </tbody>
</table>      

<script type="text/javascript">
  
  // $(document).ready(function() {
  //   $('#example').DataTable();
  // } );

//   jQuery(document).ready(function($) {
//     $(".clickable-row").click(function() {
//         window.location = $(this).data("href");
//     });
// });

</script>




<!-- -->

    
</body>

</html>







<!-- OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO -->

<!-- <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hagane</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> -->
    

    <!-- INICIO SCRIPTS CALENDARIO -->
    

    <!-- FIN SCRIPTS CALENDARIO -->

    <!--
    LIGAS PARA MODULO
    -->
    <!-- <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> -->

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<!-- </head>

<body>
    <nav class="navbar navbar-default custom-header" style="margin-bottom: 50px;">
        <div class="container-fluid">
            <div class="navbar-header"><a href="#"><img src="logo.png" alt="" style="margin-right: 40px;"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><span class="sr-only"></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav links">
                    <li role="presentation"><a href="proyecto.html">Proyectos </a></li>
                    <li role="presentation"><a href="cliente.html">Clientes </a></li>
                    <li role="presentation"><a href="empresa.html">Empresas </a></li>
                    <li role="presentation"><a href="historial.html">Historial de contacto </a></li>
                    <li role="presentation"><a href="#">Línea de tiempo </a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"> <span class="caret"></span><img src="assets/img/avatar.jpg" class="dropdown-image"></a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li role="presentation"><a href="#">Perfil </a></li>
                            <li role="presentation" class="active"><a href="#">Cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

 -->

<!--
MODAL
-->

    <!-- <button class="btn btn-success gradient" type="button" style="margin-right: 15px;">Registrar proyecto</button> -->

<!-- <button class="btn btn-customcollor gradient" type="button" data-toggle="modal" data-target="#myModal" style="margin-right: 15px;" >Registrar proyecto</button>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registro de proyecto</h4>
        </div>
        <div class="modal-body">
        <div class="form-inline">
          <table>
            <tr>
              <th>Nombre del proyecto</th>
              <th>¿Se ha cotizado?</th>
              <th>¿Se ha entregado?</th>
            </tr>
            <tr>
              <th>
              <input type="text" name="NombreDeProyecto"></th>
              <th align="center">
              <div class="example">
              <div class="toggle btn btn-default off" data-toggle="toggle" style="width: 40px; height: 34px;" id="toggleCotizado">
              <input type="checkbox" data-toggle="toggle" data-on="SI" data-off="NO">
              <div class="toggle-group">
              <label class="btn btn-primary toggle-on">SI</label>
              <label class="btn btn-default active toggle-off">NO</label>
              <span class="toggle-handle btn btn-default">
              </span>
              </div>
              </div>
              </div>
              <script>
  $(function() {
    $('#toggleCotizado').bootstrapToggle({
      on: 'SI',
      off: 'NO'
    });
  })
</script>
              </th>
              <th align="center">
              <div class="example">
              <div class="toggle btn btn-default off" data-toggle="toggle" style="width: 40px; height: 34px;" id="toggleCotizado">
              <input type="checkbox" data-toggle="toggle" data-on="SI" data-off="NO">
              <div class="toggle-group">
              <label class="btn btn-primary toggle-on">SI</label>
              <label class="btn btn-default active toggle-off">NO</label>
              <span class="toggle-handle btn btn-default">
              </span>
              </div>
              </div>
              </div>
              <script>
  $(function() {
    $('#toggleCotizado').bootstrapToggle({
      on: 'SI',
      off: 'NO'
    });
  })
</script>
              </th>              
            </tr>
          </table>
          <table>
            <tr>
              <th>Fecha de inicio</th>
              <th>Fecha final</th>
            </tr>
            <tr>
              <th>
              <input type="text" name="fechaInicio">
              </th>
              <th>
              <input type="text" name="fechaFinal">
              </th>        
            </tr>
            
          </table>

          <p>Módulos a desarrollar</p>




        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Registrar proyecto</button>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="Búsqueda">
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results">
  <thead>
    <tr>
      <th>#</th>
      <th class="col-md-5 col-xs-5">Nombre</th>
      <th class="col-md-4 col-xs-4">Correo</th>
      <th class="col-md-3 col-xs-3">Cotizado</th>
      <th class="col-md-2 col-xs-2">Entregado</th>
      <th class="col-md-2 col-xs-1"></th>
    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No se encontraron resultados</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Desarrollo de aplicación movil</td>
      <td>5 semanas</td>
      <td>Si</td>
      <td>No</td>
      <td> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Desarrollo de aplicación Web</td>
      <td>5 meses</td>
      <td>No</td>
      <td>No</td>
      <td> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Automatización de jardín botánico</td>
      <td>3 días</td>
      <td>Si</td>
      <td>Si</td>
      <td> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Aplicación movil "Comiditas"</td>
      <td>5 Meses</td>
      <td>Si</td>
      <td>Si</td>
      <td> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Desarrollo de sistema de control de avances de proyectos para clientes registrados en ambiente web.</td>
      <td>5 semanas</td>
      <td>Si</td>
      <td>No</td>
      <td> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
    </tr>
  </tbody>
</table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html> -->