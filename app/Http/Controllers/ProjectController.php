<?php

namespace App\Http\Controllers;

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


    public function ingreso(Request $name, $startDate, $finishDate, $cotizatet, $landed){
        $name = $name->input('nombre');
        $cotizatet = $cotizatet->input('cotizado');
        $startDate = $startDate->input('fechaInicio');
        $finishDate = $finishDate->input('fechFinal');
        $landed = $landed->input('entregado');

        DB::insert('insert into proyecto (nombre, fechainicio, fechafinal, duracion, cotizado, entregado) values (?, ?, ?, ? ,?, ?)', ['PEDRO', '2017-05-05','2017-05-05','5','SI','NO']);    
    }

}