<?php

namespace App\Http\Controllers;
use App\Avance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use File;

class AvanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $avances = DB::table('documentacion')->get();

        $proyectos = DB::table("proyecto")->pluck("nombre","id");
        
        return view('/avance/avance',compact('avances','proyectos'));
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
        $avance = new Avance;

        /*Nombre de la tabla->atributo = $request->NOMBRE DEL CAMPO*/

        $avance->id_proyecto = $request->id_proyecto;

        $avance->id_modulo = $request->id_modulo;

        $avance->nombre = '{'.$request->nombre_avance.'}';

        if($request->hasFile('image')){

            $avance->imagen = 'cuack';
        }

        // $path = $request->photo->store('image');

        $avance->comentario = $request->comentario_avance;

        $avance->save();

        return back();
    }

    public function myformAjax($id)
    {
        $modulos = DB::table("modulo")
                    ->where("id_proyecto",$id)
                    ->pluck("nombre","id");
        return json_encode($modulos);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    /**
     * Get Ajax Request and restun Data
     *
     * @return \Illuminate\Http\Response
     */
    

}
