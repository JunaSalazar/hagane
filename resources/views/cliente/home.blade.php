@extends('layout_cliente')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Perfil</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido estimado(a) {{ Auth::user()->nombre }}

                    <?php

                    $id_usuario = Auth::user()->id;

                    $proyecto = DB::table('proyecto')->get();

                    $cantidad_proyectos=0;

                    foreach($proyecto as $p){
                        if($id_usuario == $p->id_cliente){
                            $cantidad_proyectos++;
                        }
                    }

                    ?>

                @if(!$cantidad_proyectos<=0)
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                <th>Mis proyectos</th>
                </tr>
                </thead>
                <tbody>                
                @foreach($proyecto as $p)
                
                @if($id_usuario == $p->id_cliente)
                
                <tr>
                <td>{{ $p->nombre }}</td>
                </tr>
                
                @endif
                
                @endforeach

                </tbody>
                </table> 

                @else

                <h3>No cuenta con proyectos solicitados</h3>


            @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
