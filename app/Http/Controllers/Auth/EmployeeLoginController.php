<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeLoginController extends Controller
{

	public function __construct(){
		$this->middleware('guest:employee');
	}

    public function showLoginForm(){
    	return view('auth.empleado-login');
    }

    public function login(){
    	return true;
    }
}
