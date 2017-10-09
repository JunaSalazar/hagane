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

Route::post('store', 'ProjectController@store');

Route::get('/empresa', 'EmpresaController@index');

Route::get('/cliente', 'ClienteController@index');

Route::get('/recordatorio', function () {
    return view('recordatorio/recordatorio');
});

Route::get('/time', function () {
    return view('timepicker');
});

Route::get('/avance', function () {
    return view('avance/avance');
});





Route::get('/historial', function () {
    return view('historial/historial');
});
Route::get('/modulo', function () {
    return view('modulo/modulo');
});

Route::get('/progreso', function () {
    return view('progreso/progreso');
});



Route::get('/relacionProyectoCliente', function () {
    return view('relacionProyectoCliente/relacionProyectoCliente');
});