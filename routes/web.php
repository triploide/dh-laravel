<?php

use App\Genre;
use App\Movie;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
	/*
    $movies = Genre::find(1)->movies()->where('title', 'like', 'Sa%')->get();
    foreach ($movies as $movie) {
    	echo $movie->title .'<br>';
    }
    */
    

    $movie = Movie::find(1);
    foreach ($movie->actors as $actor) {
    	echo $actor->getNombreCompleto() . '<br>';
    }
});



//----------------
//-----RUTAS------
//----------------
Route::get('practica/rutas/ejemplo', function () {
    return view('test');
});
Route::get('practica/rutas/con-controllador', 'Practica\RutasController@conControlador');
Route::get('practica/rutas/parametro/{parametro}', 'Practica\RutasController@parametro');
Route::get('practica/rutas/parametro-opcional/{parametro?}', 'Practica\RutasController@parametroOpcional');

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

//----------------------
//-----COLLECTIONS------
//----------------------
Route::get('practica/collections', 'Practica\CollectionController@test');

//-------------------
//-----PELÍCULAS-----
//-------------------
//Route::get('pelicula/{id}', 'PeliculaController@show');
Route::resource('movies', 'MoviesController');
