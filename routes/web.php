<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('ejemplo', function () {
	//return 'test';
	//return file_get_contents(__DIR__.'/../resources/views/test.blade.php');
	return view('test');
});

Route::get('peliculas/pelicula', function ($pelicula='Avatar') {
    return '<h1>'.$pelicula.'</h1>';
});

Route::get('ruta-con-controllador', 'EjemploController@rutaConControlador');

Route::get('controlador/{parametro}', 'EjemploController@ejemploParametro');





Route::get('pelicula/{id}', 'PeliculaController@show');

//BLADE
Route::get('blade/ejemplo-1', 'BladeController@ejemplo1');
Route::get('blade/bootstrap', 'BladeController@bootstrap');

