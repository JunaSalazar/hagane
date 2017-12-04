<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hagane</title>
    <link rel="shortcut icon" type="image/png" href="/img/iconImage.png"/>
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
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    
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

    <!-- Empieza fullCalendar -->
    <link href="{{ URL::asset('vendor/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('vendor/fullcalendar/fullcalendar.print.min.css') }}" rel="stylesheet" media="print" />
    <style src="{{ URL::asset('vendor/fullcalendar/fullcalendar.min.css') }}"></style>
    <!-- Termina fullCalendar -->



    <style>
    @yield('estilo')
    </style>
</head>

<body> 
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
      <a href="{{ url('home') }}"><img src="/img/logo.png" alt="" style="margin-right: 40px;"></a> 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="{{ url('cliente/progreso') }}">Progreso de mis proyectos<span class="sr-only">(current)</span></a></li>

        <li class=""><a href="{{ url('cliente/avance') }}">Documentos de avances<span class="sr-only">(current)</span></a></li>

      </ul>
      
      <!-- INICIO DE SECCIÓN DE PERFIL -->

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('home') }}">Perfil</a></li>
            <li role="separator" class="divider"></li>
{{-- EXTRAEXTRAEXTRAEXTRA --}}
            <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    {{-- EXTRAEXTRAEXTRAEXTRA --}}
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

      <!-- FIN DE SECCIÓN DE PERFIL -->


      {{-- CONTENIDO DEL RESTO DE LAS PÁGINAS*************************** --}}
      <div id="cuerpo">
        @yield('content')
      </div>
      {{-- ************************************************************* --}}

    <script>
            var modal = document.getElementById('myModal');

// Get the images
var img1 = document.getElementById('myImg1');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

//handle click for myImg1
img1.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
//handle click for myImg2
img2.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}



// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
            </script>
</body>
</html>