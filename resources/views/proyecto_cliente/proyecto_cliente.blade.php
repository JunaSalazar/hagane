@extends('layout')

@section('content')

      <!-- FIN DE SECCIÓN DE PERFIL -->

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre del cliente</th>
                <th>Proyecto correspondiente</th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre del cliente</th>
                <th>Proyecto correspondiente</th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
              {{ $entrada = TRUE }}
              {{ $salida = FALSE }}
              @foreach($clientes as $c)
              @if($salida)
              @break
              @endif
              <?php
              $nombre_completo = $c->nombre.' '.$c->apellido_paterno.' '.$c->apellido_materno;
              ?>
              <td>{{ $nombre_completo }}</td>
              @foreach($proyectos as $p)
              @if(is_null($p->id))
              {{ $salida = TRUE }}
              @endif
              <?php
              $nombre_proyecto=$p->nombre;
              $id=$p->id;
              ?>
              @if ($c->id == $p->id_cliente)
              @if ($entrada)
              {{ $entrada = FALSE }}
              <td>{{ $nombre_proyecto }}</td>
              <td>
                  <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#infoModal" data-whatever="@mdo" style="margin-bottom: 5px;"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>

                  <button type="button" class="btn btn-primary gradient" data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
              </td>
            </tr>
              @else
              <td></td>
              {{ $entrada = FALSE }}
              <td>{{ $nombre_proyecto }}</td>
              <td>
                  <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#infoModal" data-whatever="@mdo" style="margin-bottom: 5px;"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>

                  <button type="button" class="btn btn-primary gradient" data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
              </td>
            </tr>
            @endif
            @endif
              @endforeach
              {{ $entrada = TRUE }}


              @endforeach
        </tbody>
</table>
@stop