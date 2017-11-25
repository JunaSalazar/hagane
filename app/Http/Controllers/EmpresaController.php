<?php

namespace App\Http\Controllers;
use App\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $empresas = DB::table('empresa')->get();

        return view('/empleado/empresa/empresa', ['empresas' => $empresas]);
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

        $empresa->razon_social = $request->razon_social;

        $empresa->rfc = $request->rfc;

        $empresa->calle = $request->calle_empresa;

        $numero = $request->numero_empresa;

        $empresa->numero =  $numero;       

        $empresa->colonia = $request->colonia_empresa;

        $empresa->codigo_postal  = $request->codigo_postal;

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
        
        $task = Empresa::findOrFail($id);

        return view('empleado.empresa.datosEmpresa')->withTask($task);
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
