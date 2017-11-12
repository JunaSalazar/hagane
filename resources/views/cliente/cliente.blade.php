@extends('layout')

@section('content')

    <!-- Empieza Modal button (Alta de cliente)-->
    
    @component('cliente.registroClienteModal')
        @slot('empresas')
            @foreach($empresas as $e)
                <?php
                $nombre=substr($e->nombre,1);
                $nombre = str_replace("}","",$nombre);
                if((strcmp(substr($nombre,-1),'"'))==0){
                $nombre=substr($nombre,1);
                $nombre = str_replace('"','',$nombre);
                }

                $id=$e->id;
                ?>
            <option value = '{{ $id }}'>{{ $nombre }}</option>
            @endforeach      
        @endslot
    @endcomponent

    <!-- Termina Modal button (Alta de cliente)-->

{{-- FALTA LA VISTA PARA DESPLEGAR DATOS DE LA FILA --}}

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Empresa</th>
                <th>Tipo</th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Empresa</th>
                <th>Tipo</th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>
            @foreach($clientes as $c)
          <tr>
                <?php 
                // CAMPOS PARA NOMBRE COMPLETO**********************************
                $nombre=substr($c->nombre,1);
                $nombre = str_replace("}","",$nombre);
                if((strcmp(substr($nombre,-1),'"'))==0){
                  $nombre=substr($nombre,1);
                  $nombre = str_replace('"','',$nombre);
                }

                $ap=substr($c->apellido_paterno,1);
                $ap = str_replace("}","",$ap);
                if((strcmp(substr($ap,-1),'"'))==0){
                  $ap=substr($ap,1);
                  $ap = str_replace('"','',$ap);
                }

                $am=substr($c->apellido_materno,1);
                $am = str_replace("}","",$am);
                if((strcmp(substr($am,-1),'"'))==0){
                  $am=substr($am,1);
                  $am = str_replace('"','',$am);
                }
                // CAMPOS PARA NOMBRE COMPLETO************************************

                // CAMPOS PARA CORREO************************************
                $correo=substr($c->correo,1);
                $correo = str_replace("}","",$correo);
                if((strcmp(substr($correo,-1),'"'))==0){
                  $correo=substr($correo,1);
                  $correo = str_replace('"','',$correo);
                }
                // CAMPOS PARA CORREO************************************

                // CAMPOS PARA TELEFONO************************************
                // $telefono=substr($c->telefono,1);
                // $telefono = str_replace("}","",$telefono);
                // if((strcmp(substr($telefono,-1),'"'))==0){
                //   $telefono=substr($telefono,1);
                //   $telefono = str_replace('"','',$telefono);
                // }
                // CAMPOS PARA TELEFONO************************************

                $codigo='';

                foreach($empresas as $e){
                    if($e->id == $c->id_empresa){
                        $empresa = $e->nombre;
                        $empresa=substr($empresa,1);
                        $empresa = str_replace("}","",$empresa);
                        if((strcmp(substr($empresa,-1),'"'))==0){
                            $empresa=substr($empresa,1);
                            $empresa = str_replace('"','',$empresa);
                        }
                    }
                }

                // CAMPOS PARA TIPO************************************
                $tipo=substr($c->tipo_cliente,1);
                $tipo = str_replace("}","",$tipo);
                if((strcmp(substr($tipo,-1),'"'))==0){
                  $tipo=substr($tipo,1);
                  $tipo = str_replace('"','',$tipo);
                }
                // CAMPOS PARA TIPO************************************

                $nombre_completo = $nombre.' '.$ap.' '.$am;

                $telefono_raw = $c->telefono;

                $primera_parte = substr($telefono_raw, 1, 3);

                $segunda_parte = substr($telefono_raw, 4, 3);

                $tercera_parte = substr($telefono_raw, 7, 4);

                $telefono = $primera_parte.'-'.$segunda_parte.'-'.$tercera_parte;

                ?>
                <td>{{ $nombre_completo }}</td>
                <td>{{ $correo }}</td>
                <td>{{ $telefono }}</td>
                <td>{{ $empresa }}</td>
                <td>{{ $tipo }}</td>
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
{{-- 
// CAMPOS PARA EMPRESA************************************

                // $empresa = DB::table('empresa')
                //             ->join('cliente', 'cliente.id_empresa', '=', 'empresa.id')
                //             ->select('empresa.id','empresa.nombre')
                //             ->get();

                // foreach($empresas as $e){
                //     if(($e->id) == ($c->id_empresa)){
                //         $empresa = $e->nombre;
                //         $empresa=substr($empresa,1);
                //         $empresa = str_replace("}","",$empresa);
                //         if((strcmp(substr($empresa,-1),'"'))==0){
                //             $empresa=substr($empresa,1);
                //             $empresa = str_replace('"','',$empresa);
                //         }
                //     }
                // }
                // CAMPOS PARA EMPRESA************************************ --}}