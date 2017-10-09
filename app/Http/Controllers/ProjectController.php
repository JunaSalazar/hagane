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

        $proyectos = DB::table('proyecto')->get();

        return view('/proyecto/proyecto', ['proyectos' => $proyectos]);

        // ************************CÓDIGO_BUENO*******************************************************
        // $users = DB::table('users')->paginate(1);

        // return view('proyecto')->with(['users' => $users]);
        // ************************CÓDIGO_BUENO*******************************************************
    }

    public function store(Request $request)
    {
        // Validate the request...

        $proyecto = new Proyecto;

// ****************NOMBRE DEL PROYECTO********************
        $inicio = '{';
        $nombre = $request->nombre;
        $final = '}';
        $nombreProyecto = $inicio . $nombre . $final;
        $proyecto->nombre = $nombreProyecto;
// ****************NOMBRE DEL PROYECTO********************

        $proyecto->fechainicio = $request->fechaInicio;

        $proyecto->fechafinal = $request->fechaFinal;

        $proyecto->duracion = '3';

// ****************COTIZADO DEL PROYECTO********************
        $inicio = '{';
        $cotizado = $request->cotizado;
        $final = '}';
        $cotizadoFinal = $inicio . $cotizado . $final;
        $proyecto->cotizado = $cotizadoFinal;
// ****************COTIZADO DEL PROYECTO********************

// ****************ENTREGADO DEL PROYECTO********************
        $inicio = '{';
        $entregado = $request->entregado;
        $final = '}';
        $entregadoFinal = $inicio . $entregado . $final;
        $proyecto->entregado = $entregadoFinal;
// ****************ENTREGADO DEL PROYECTO********************

        $proyecto->save();

        return back();
    }

}