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
}