@extends('layout_cliente')

@section('content')

      
        <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400);
        
        .font-roboto {
        font-family: 'roboto condensed';
        }
        
        * {
        box-sizing: border-box;
        }
        
        body {
        .font-roboto();
        }
        
        .modal {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        overflow: hidden;
        }
        
        .modal-dialogImage {
        position: fixed;
        margin: 0;
        width: 100%;
        height: 100%;
        padding: 0;
        }
        
        .modal-contentImage {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border: 2px solid #021c40;
        border-radius: 0;
        box-shadow: none;
        }
        
        .modal-headerImage {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        height: 65px;
        padding: 10px;
        background: #021c40;
        border: 0;
        }
        
        .modal-titleImage {
        font-weight: 300;
        font-size: 2em;
        color: #fff;
        line-height: 30px;
        }
        
        .modal-bodyImage {
        position: absolute;
        top: 50px;
        bottom: 60px;
        width: 100%;
        font-weight: 300;
        overflow: auto;
        }
        
        .modal-footerImage {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        height: 60px;
        padding: 10px;
        background: #f1f3f5;
        }

        .centered {
        position: fixed;
        top: 50%;
        left: 50%;
        /* bring your own prefixes */
        transform: translate(-50%, -50%);
        }

        h1,
        h2{
        color: #60cc69;
        line-height: 1.5;
        
        // first
        &:first-child {
        margin-top: 0;
        }
        }

      </style>


{{-- MODAL DE MUESTREO DE IMAGEN EN GRANDE --}}
      <div class="modal fade" id="modalImagen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialogImage modal-lg" role="document">
        <div class="modal-contentImage">
          <div class="modal-headerImage">
            <h2 class="modal-titleImage" id="exampleModalLabel">Imagen</h2>
          </div>
          <div class="modal-bodyImage">
                <img class="img-responsive centered" style="max-height:7500px;" src="/storage/{{ $task->imagen }}">
          </div>
          <div class="modal-footerImage">
                <button type="button" class="btn btn-danger gradient" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
{{-- MODAL DE MUESTREO DE IMAGEN EN GRANDE --}}








      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">AVANCE</h3>
          </div>
          <div class="modal-body">
            <table class="table table-striped">
          <thead>
            <tr>
              <th>Campos:</th>
              <th>Datos:</th>
            </tr>
          </thead>
        <tbody>
          <tr>
            <th scope="row">Nombre</th>
            <td>{{ $task->nombre }}</td>
          </tr>
          <tr>
            <th scope="row">Proyecto</th>
            <td>{{ $task->id_proyecto }}</td>
          </tr>
          <tr>
            <th scope="row">Modulo</th>
            <td>{{ $task->id_modulo }}</td>
          </tr>
          <tr>
            <th scope="row">Comentario texto</th>
            <td>{{ $task->comentario }}</td>
          </tr>
          @if($task->imagen != null)
            <tr>
            <th scope="row">Imagen</th>
            <td><button type="button" class="btn btn-success gradient"  data-toggle="modal" data-target="#modalImagen" data-whatever="@mdo" style="margin-bottom: 25px;">Desplegar imagen</button>

              {{-- <div class="col-md-4"><img style="width:100%; height:auto;" src="/storage/{{ $task->imagen }}"></div></td> --}}
            
            {{-- <img  src="img_fjords.jpg" alt="Trolltunga, Norway" width="300" height="200"> --}}
            {{-- <img id="myImg1" src="/storage/{{ $task->imagen }}" alt="OLA" width="300" height="200"> --}}

            <!-- The Modal -->
            
            </tr>
          @endif
          
        </tbody>
        </table>
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

@stop