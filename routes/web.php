<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// *********************POR PARTE DEL EMPLEADO******************************************
// BUENO*************************************************************************
// BUENO*************************************************************************
// BUENO*************************************************************************

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// BUENO*************************************************************************
// BUENO*************************************************************************
// BUENO*************************************************************************
Route::get('/login', function () {
    return view('/auth/login');
});

Route::get('/register', function () {
    return view('/auth/register');
});

Auth::routes();

// Route::post('/login', 'Auth\LoginController@loginNameOrEmail');

Route::get('/empleado', 'HomeEmployeeController@index');


// ********************************************************************
// ************************RUTAS DE PROYECTO***************************
// ********************************************************************
Route::get('/proyecto', 'ProyectoController@index');

Route::post('/proyecto/store', 'ProyectoController@store');

Route::get('/proyecto/{id}/show', 'ProyectoController@show');
// ********************************************************************
// ************************RUTAS DE PROYECTO***************************
// ********************************************************************
// <----------------------------------------------------------------------------------->
// <----------------------------------------------------------------------------------->
// ********************************************************************
// ************************RUTAS DE EMPRESA****************************
// ********************************************************************

Route::get('/empresa', 'EmpresaController@index');

Route::post('/empresa/store', 'EmpresaController@store');

Route::get('/empresa/{id}/show', 'EmpresaController@show');

// ********************************************************************
// ************************RUTAS DE EMPRESA****************************
// ********************************************************************
// <----------------------------------------------------------------------------------->
// <----------------------------------------------------------------------------------->
// ********************************************************************
// ************************RUTAS DE CLIENTE****************************
// ********************************************************************
Route::get('/cliente', 'ClienteController@index');

Route::post('/cliente/store', 'ClienteController@store');

Route::get('/cliente/{id}/show', 'ClienteController@show');

// ********************************************************************
// ************************RUTAS DE CLIENTE****************************
// ********************************************************************
// <----------------------------------------------------------------------------------->
// <----------------------------------------------------------------------------------->



Route::get('/modulo', 'ModuloController@index');

Route::get('/proyecto_cliente', 'ProyectoClienteController@index');
// <----------------------------------------------------------------------------------->
// <----------------------------------------------------------------------------------->
// ********************************************************************
// ************************RUTAS DE AVANCE*****************************
// ********************************************************************
Route::get('/avance',array('as'=>'avance','uses'=>'AvanceController@index'));

Route::get('/avance/ajax/{id}',array('as'=>'avance.ajax','uses'=>'AvanceController@myformAjax'));

Route::post('/avance/store', 'AvanceController@store');

Route::get('/avance/{id}/show', 'AvanceController@show');

// ********************************************************************
// ************************RUTAS DE AVANCE*****************************
// ********************************************************************
// <----------------------------------------------------------------------------------->
// <----------------------------------------------------------------------------------->

Route::get('/historial', 'HistorialController@index');

Route::post('/historial/store', 'HistorialController@store');

Route::get('/recordatorio', function () {
    return view('/empleado/recordatorio/recordatorio');
});

Route::post('/recordatorio/store', 'RecordatorioController@store');

Route::get('/time', function () {
    return view('timepicker');
});


Route::get('/progreso', function () {
    return view('/empleado/progreso/progreso');
});

// *********************POR PARTE DEL EMPLEADO******************************************



