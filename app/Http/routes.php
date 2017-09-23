<?php

Route::get('/proyecto', function () {
$proyecto = DB::table('proyecto')->select('id', 'nombre', 'fechainicio', 'fechafinal', 'duracion', 'cotizado', 'entregado')->get();
})