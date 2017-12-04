@extends('layout')

@section('content')

    <!-- Empieza Modal button (Alta de cliente)-->
    
    @component('empleado.cliente.registroClienteModal')
        @slot('empresas')
            @foreach($empresas as $e)
                <?php
                $nombre=$e->nombre;

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
                $nombre=$c->nombre;

                $ap=$c->apellido_paterno;

                $am=$c->apellido_materno;

                // MAYUSCULAS
                $nombre=ucfirst($nombre);
                $ap=ucfirst($ap);
                $am=ucfirst($am);
                // CAMPOS PARA NOMBRE COMPLETO************************************

                // CAMPOS PARA CORREO************************************
                $correo=$c->email;
                // CAMPOS PARA CORREO************************************


                foreach($empresas as $e){
                    if($e->id == $c->id_empresa){
                        $empresa = $e->nombre;
                    }
                }

                // CAMPOS PARA TIPO************************************
                $tipo=$c->tipo_cliente;
                // CAMPOS PARA TIPO************************************


                //***********************CAMPOS PARA TELEFONO****************************

                $telefono_raw = $c->telefono;

                $primera_parte = substr($telefono_raw, 1, 3);

                $segunda_parte = substr($telefono_raw, 4, 3);

                $tercera_parte = substr($telefono_raw, 7, 4);

                $telefono = $primera_parte.'-'.$segunda_parte.'-'.$tercera_parte;

                //***********************CAMPOS PARA TELEFONO****************************

                ?>
                <td>{{ $nombre_completo }}</td>
                <td>{{ $correo }}</td>
                <td>{{ $telefono }}</td>
                <td>{{ $empresa }}</td>
                <td>{{ $tipo }}</td>
                <td>
                  {{-- *********************************BOTÓN DE MOSTRAR DATOS************************************* --}}
                  <form action="{{URL('cliente/'. isset($cliente) ?: '')}}" method="POST">
                  <a href="{{URL('cliente/'. $c->id.'/show')}}" class="btn btn-primary gradient"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></a>
                  </form>
                  {{-- *********************************BOTÓN DE MOSTRAR DATOS************************************* --}}

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