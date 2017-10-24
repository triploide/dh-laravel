<?php

Route::get('/', function () {
    return view('welcome');
});


//-----RUTAS------
Route::get('practica/rutas/ejemplo', function () {
	return view('test');
});
Route::get('practica/rutas/con-parametro', function ($pelicula='Avatar') {
    return '<h1>'.$pelicula.'</h1>';
});
Route::get('practica/rutas/con-controllador', 'EjemploController@rutaConControlador');
Route::get('practica/rutas/parametro-opcional/{parametro}', 'EjemploController@ejemploParametro');

Route::get('pelicula/{id}', 'PeliculaController@show');
Route::post('practica/ruta/post');

//BLADE
Route::get('practica/blade/ejemplo-1', 'BladeController@ejemplo1');
Route::get('practica/blade/bootstrap', 'BladeController@bootstrap');


Route::get('practica/rutas/formulario', 'Practica\RutasController@mostrarFormulario');
Route::post('practica/rutas/formulario', 'Practica\RutasController@guardarFormulario');

//-----ELOQUENT------
Route::get('practica/eloquent/all', 'Practica\EloquentController@all');
Route::get('practica/eloquent/find/{actorId}', 'Practica\EloquentController@find');
Route::get('practica/eloquent/where', 'Practica\EloquentController@where');
Route::get('practica/eloquent/whereAnidado', 'Practica\EloquentController@whereAnidado');
