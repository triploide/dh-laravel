<?php

Route::get('/', function () {
    return view('welcome');
});


//----------------
//-----RUTAS------
//----------------
Route::get('practica/rutas/ejemplo', function () {
    return view('test');
});
Route::get('practica/rutas/con-controllador', 'RutasController@conControlador');
Route::get('practica/rutas/parametro/{parametro}', 'RutasController@parametro');
Route::get('practica/rutas/parametro-opcional/{parametro?}', 'RutasController@parametroOpcional');

Route::get('practica/rutas/formulario', 'Practica\RutasController@mostrarFormulario');
Route::post('practica/rutas/formulario', 'Practica\RutasController@guardarFormulario');

//---------------
//-----BLADE-----
//---------------
Route::get('practica/blade/ejemplo-1', 'BladeController@ejemplo1');
Route::get('practica/blade/bootstrap', 'BladeController@bootstrap');


//-------------------
//-----ELOQUENT------
//-------------------
Route::get('practica/eloquent/all', 'Practica\EloquentController@all');
Route::get('practica/eloquent/find/{actorId}', 'Practica\EloquentController@find');
Route::get('practica/eloquent/where', 'Practica\EloquentController@where');
Route::get('practica/eloquent/whereAnidado', 'Practica\EloquentController@whereAnidado');

//-------------------
//-----PELÍCULAS-----
//-------------------
Route::get('pelicula/{id}', 'PeliculaController@show');
