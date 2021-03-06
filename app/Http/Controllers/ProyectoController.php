<?php

namespace App\Http\Controllers;

use App\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProyectoController extends Controller
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request...

        $proyecto = new Proyecto;

        /*Nombre de la tabla->atributo = $request->NOMBRE DEL CAMPO*/

        $proyecto->id_cliente = $request->cliente_proyecto;

// ****************NOMBRE DEL PROYECTO********************
        $proyecto->nombre = $request->nombre_proyecto;
// ****************NOMBRE DEL PROYECTO********************
        $proyecto->fechainicio = $request->fechaInicio;
        $proyecto->fechafinal = $request->fechaFinal;
// ****************ESTATUS ACTUAL DEL PROYECTO********************
        $proyecto->estatus = $request->estatus;
// ****************ESTATUS ACTUAL DEL PROYECTO********************

// ****************ENTREGADO DEL PROYECTO********************

        $proyecto->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $task = Proyecto::findOrFail($id);

        return view('empleado.proyecto.datosProyecto')->withTask($task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}