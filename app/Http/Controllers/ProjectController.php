<?php

namespace App\Http\Controllers;

use App\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Show all of the users for the application.
     *
     * @return Response
     */
    public function index(){
        
        $clientes = DB::table('cliente')->get();

        $proyectos = DB::table('proyecto')->get();

        return view('/empleado/proyecto/proyecto', compact('proyectos','clientes'));
    }

    public function store(Request $request)
    {
        // Validate the request...

        $proyecto = new Proyecto;

        /*Nombre de la tabla->atributo = $request->NOMBRE DEL CAMPO*/

        $inicio = '{';
        $final = '}';

        $proyecto->id_cliente = $request->cliente_proyecto;

// ****************NOMBRE DEL PROYECTO********************
        $proyecto->nombre = $inicio.$request->nombre_proyecto.$final;
// ****************NOMBRE DEL PROYECTO********************
        $proyecto->fechainicio = $request->fechaInicio;
        $proyecto->fechafinal = $request->fechaFinal;
        $proyecto->duracion = '3';
// ****************COTIZADO DEL PROYECTO********************
        $proyecto->cotizado = $inicio . $request->cotizado . $final;
// ****************COTIZADO DEL PROYECTO********************

// ****************ENTREGADO DEL PROYECTO********************
        $proyecto->entregado = $inicio.$request->entregado.$final;
// ****************ENTREGADO DEL PROYECTO********************

        $proyecto->save();

        return back();
    }

}