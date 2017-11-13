@extends('layout')

@section('content')

    <!-- Empieza Modal button (Alta de cliente)-->

    @component('empleado.empresa.registroEmpresaModal')
    @endcomponent

    <!-- Termina Modal button (Alta de cliente)-->

  <!-- Empieza Modal button (Información de cliente)-->

    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Datos del proyecto</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          
          <div class="modal-body">
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
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger gradient" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

  <!-- Termina Modal button (Información de cliente)-->

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Razon Social</th>
                <th>Dirección</th>
                <th>RFC</th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Razon Social</th>
                <th>Dirección</th>
                <th>RFC</th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>
            @foreach($empresas as $e)
          <tr>
            <?php 
                $nombre=substr($e->nombre,1);
                $nombre = str_replace("}","",$nombre);
                if((strcmp(substr($nombre,-1),'"'))==0){
                  $nombre=substr($nombre,1);
                  $nombre = str_replace('"','',$nombre);
                }

                $razon=substr($e->razon_social,1);
                $razon = str_replace("}","",$razon);
                if((strcmp(substr($razon,-1),'"'))==0){
                  $razon=substr($razon,1);
                  $razon = str_replace('"','',$razon);
                }

                $calle=substr($e->calle,1);
                $calle = str_replace("}","",$calle);
                if((strcmp(substr($calle,-1),'"'))==0){
                  $calle=substr($calle,1);
                  $calle = str_replace('"','',$calle);
                }

                $numero=substr($e->numero,1);
                $numero = str_replace("}","",$numero);
                if((strcmp(substr($numero,-1),'"'))==0){
                  $numero=substr($numero,1);
                  $numero = str_replace('"','',$numero);
                }

                $colonia=substr($e->colonia,1);
                $colonia = str_replace("}","",$colonia);
                if((strcmp(substr($colonia,-1),'"'))==0){
                  $colonia=substr($colonia,1);
                  $colonia = str_replace('"','',$colonia);
                }

                $codigo_postal=substr($e->codigo_postal,1);
                $codigo_postal = str_replace("}","",$codigo_postal);
                if((strcmp(substr($codigo_postal,-1),'"'))==0){
                  $codigo_postal=substr($codigo_postal,1);
                  $codigo_postal = str_replace('"','',$codigo_postal);
                }

                $estado=substr($e->estado,1);
                $estado = str_replace("}","",$estado);
                if((strcmp(substr($estado,-1),'"'))==0){
                  $estado=substr($estado,1);
                  $estado = str_replace('"','',$estado);
                }

                $ciudad=substr($e->ciudad,1);
                $ciudad = str_replace("}","",$ciudad);
                if((strcmp(substr($ciudad,-1),'"'))==0){
                  $ciudad=substr($ciudad,1);
                  $ciudad = str_replace('"','',$ciudad);
                }

                $pais=substr($e->pais,1);
                $pais = str_replace("}","",$pais);
                if((strcmp(substr($pais,-1),'"'))==0){
                  $pais=substr($pais,1);
                  $pais = str_replace('"','',$pais);
                }

                $direccion = $calle.' #'.$numero.', '.$colonia.', '.$codigo_postal.', '.$ciudad.', '.$estado.', '.$pais;

                // COMBINAR CALLE,NUMERO,COLONIA,CODIGOPOSTAL,ESTADO,CIUDAD

                $rfc=substr($e->rfc,1);
                $rfc = str_replace("}","",$rfc);
                if((strcmp(substr($rfc,-1),'"'))==0){
                  $rfc=substr($rfc,1);
                  $rfc = str_replace('"','',$rfc);
                }
                ?>
                <td>{{ $nombre }}</td>
                <td>{{ $razon }}</td>
                <td>{{ $direccion }}</td>
                <td>{{ $rfc }}</td>
                <td>
                  <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#infoModal" data-whatever="@mdo" style="margin-bottom: 5px;"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>
                  <button type="button" class="btn btn-primary gradient" data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                </td>
            </tr>
            @endforeach
        </tbody>
</table>      

<script type="text/javascript">
  
  $(document).ready(function() {
    $('#example').DataTable();
  } );

</script>

@stop