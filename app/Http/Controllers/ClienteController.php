<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $empresas = \App\Empresa::all();
        
        $clientes = Cliente::all();

        return view('/empleado/cliente/cliente', compact('clientes', 'empresas'));
        
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

        $cliente = new Cliente;

        /*Nombre de la tabla->atributo = $request->NOMBRE DEL CAMPO*/

        $cliente->nombre = '{'.$request->nombre_cliente.'}';

        $cliente->apellido_paterno = '{'.$request->apellido_paterno.'}';

        $cliente->apellido_materno = '{'.$request->apellido_materno.'}';

        $cliente->id_empresa = $request->empresa_cliente;

        $cliente->password = '{ABCD}';

        $cliente->email = '{'.$request->correo_cliente.'}';

        $cliente->telefono = '{'.$request->telefono_cliente.'}';

        $cliente->tipo_cliente = '{'.$request->tipo.'}';

        $cliente->save();

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
