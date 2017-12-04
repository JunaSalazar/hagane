<?php

namespace App\Http\Controllers;

use App\Historial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HistorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clientes = \App\Cliente::all();
        
        $contactos = Historial::all();

        return view('/empleado/historial/historial', compact('contactos', 'clientes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $historial = new Historial;

        /*Nombre de la tabla->atributo = $request->NOMBRE DEL CAMPO*/

        $historial->id_cliente = $request->id_cliente;

        // $historial->id_empleado = ;

        $historial->fecha = $request->fecha_contacto;

        $hora = $request->hora_historial;

        $minuto = $request->minuto_historial;

        $tiempo = $request->tiempo_historial;

        if($tiempo == "pm"){
                $hora += 12;
                if($hora>=24){
                    $hora = 00;
                }
        }
        if($tiempo == "am"){
            if($hora == "12"){
                $hora = 00;
            }
        }

        $historial->hora = $hora.':'.$minuto.':'.'00';

        $historial->comentario = $request->comentario_contacto;

        $historial->save();

        $invoice = $historial->id;

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
        $task = Historial::findOrFail($id);

        return view('empleado.historial.datosHistorial')->withTask($task);
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
