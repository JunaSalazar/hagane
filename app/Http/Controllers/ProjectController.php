<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $proyectos = DB::select('select * from proyecto');

        return view('proyecto', ['proyecto' => $proyecto]);
    }
}