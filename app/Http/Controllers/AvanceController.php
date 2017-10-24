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

        $proyectos = DB::table('proyecto')->get();

        return view('/avance/avance', compact('proyectos','avances'));
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

        $imagen = "";

        $request->hasFile('imagen');
        $base64=base64_encode(preg_replace('#^data:image/\w+;base64,#i', '', $request));


           // $path = $request->getClienteOriginalPath();
           // $type = pathinfo($path, PATHINFO_EXTENSION);
           // $data = file_get_contents($path);
           // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        

        $avance->imagen = $base64;

        $avance->save();

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
