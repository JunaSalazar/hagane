<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:employee');
    }
    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('empleado.home');
    }
}
