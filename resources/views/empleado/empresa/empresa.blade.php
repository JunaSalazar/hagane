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
                $nombre = $e->nombre;

                $razon = $e->razon_social;

                $calle = $e->calle;

                $numero = $e->numero;

                $colonia = $e->colonia;

                $codigo_postal = $e->codigo_postal;

                $estado = $e->estado;

                $ciudad = $e->ciudad;

                $pais = $e->pais;

                $direccion = $calle.' #'.$numero.', '.$colonia.', '.$codigo_postal.', '.$ciudad.', '.$estado.', '.$pais;

                // COMBINAR CALLE,NUMERO,COLONIA,CODIGOPOSTAL,ESTADO,CIUDAD

                $rfc=$e->rfc;
                ?>
                <td>{{ $nombre }}</td>
                <td>{{ $razon }}</td>
                <td>{{ $direccion }}</td>
                <td>{{ $rfc }}</td>
                <td>
                  <form action="{{URL('empresa/'. isset($empresa) ?: '')}}" method="POST">
                  <a href="{{URL('empresa/'. $e->id.'/show')}}" class="btn btn-primary gradient"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></a>
                  </form>
                  {{-- <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#infoModal" data-whatever="@mdo" style="margin-bottom: 5px;"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></button> --}}





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