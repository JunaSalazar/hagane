<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('empresa/empresa');
        
        // $empresas = DB::table('empresa')->get();

        // return view('/empresa/empresa', ['empresas' => $empresas]);
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
        $empresa = new Empresa;

        /*Nombre de la tabla->atributo = $request->NOMBRE DEL CAMPO*/  

        $empresa->nombre = $request->nombre_empresa;

        $empresa->razon = $request->razon_social;

        $empresa->rfc = $request->rfc;

        $empresa->calle_y_numero = $request->calle_y_numero;

        $empresa->colonia = $request->colonia;

        $empresa->codigopostal  = $request->codigo_postal;

        $empresa->ciudad  = $request->ciudad_empresa;

        $empresa->estado  = $request->estado_empresa;

        $empresa->pais  = $request->pais_empresa;

        $empresa->save();

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
}
