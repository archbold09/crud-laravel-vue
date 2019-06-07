<?php

Route::get('/', function () {
    return view('dashboard');
});
Route::resource('habilidades', 'HabilidadController',['except'=>'show','create','edit']);
        //Nombre de la ruta   //Nombre del controlador