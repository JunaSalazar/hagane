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

Route::get('/proyecto', function () {
    return view('proyecto');
});

Route::get('/avance', function () {
    return view('avance');
});

Route::get('/cliente', function () {
    return view('cliente');
});

Route::get('/empresa', function () {
    return view('empresa');
});

Route::get('/historial', function () {
    return view('historial');
});

Route::get('/modulo', function () {
    return view('modulo');
});

Route::get('/progreso', function () {
    return view('progreso');
});

Route::get('/recordatorio', function () {
    return view('recordatorio');
});

Route::get('/relacionProyectoCliente', function () {
    return view('relacionProyectoCliente');
});

