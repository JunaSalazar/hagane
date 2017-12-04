@extends('layout')

@section('estilo')

h2{
  font-size: 25px;
}

#calendario {
  margin: 40px 10px;
    padding: 0;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
}

#calendar {
    max-width: 900px;
    margin: 0 auto;
}

#progresoModulo{
    width: 80px;
}

#calleEmpresa{
    width: 80%;
}

#numeroEmpresa{
    width: 50%;
}

div.scroll {
    width: auto ;
    height: 250px;
    overflow: scroll;
    overflow-x: hidden; /*La barra horizontal está oculto.*/
    overflow-y: show;   /*Solo se muestra la barra de navegación vertical.*/
}
@stop