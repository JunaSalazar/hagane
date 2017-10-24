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

Route::get('/proyecto', 'ProjectController@index');

Route::post('/proyecto/store', 'ProjectController@store');

Route::get('/empresa', 'EmpresaController@index');

Route::post('/empresa/store', 'EmpresaController@store');

Route::get('/cliente', 'ClienteController@index');

Route::post('/cliente/store', 'ClienteController@store');

Route::get('/modulo', 'ModuloController@index');

Route::get('/proyecto_cliente', 'ProyectoClienteController@index');

Route::get('/avance', 'AvanceController@index');

Route::post('/avance/store', 'AvanceController@store');

Route::get('/recordatorio', function () {
    return view('recordatorio/recordatorio');
});

Route::get('/time', function () {
    return view('timepicker');
});







Route::get('/historial', function () {
    return view('historial/historial');
});


Route::get('/progreso', function () {
    return view('progreso/progreso');
});



