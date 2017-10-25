<?php

namespace App\Http\Controllers\Practica;

use App\Http\Controllers\Controller;
use App\Http\Requests\MovieRequest;
use App\Movie;
use Illuminate\Http\Request;

class RutasController extends Controller
{

	public function controlador()
    {
    	return "Hola desde el controller";
    }

    public function parametro($parametro)
    {
    	return $parametro;
    }

    public function parametroOpcional($parametro='Valor por defecto')
    {
    	return $parametro;
    }

    //manejo de formularios y request
    public function mostrarFormulario()
    {
    	//return view('practica/form');
    	return view('practica.form');
    }

    public function guardarFormulario(MovieRequest $request)
    {
        //dd($request->all());

        //dd($request->input('fecha_estreno'));

        //dd($request->only('fecha_estreno', 'titulo'));
    	
        //dd($request->isMethod('post'));

        //dd( request()->all() );

        /*
        $this->validate(request(), [
            'title'=> 'required|max:255',
            'rating'=> 'required|numeric',
            'awards'=> 'required|integer',
            'length'=> 'required|integer',
            'release_date'=> 'required|date',
        ], [
            'title.required' => 'El título es obligatorio',
            'title.max' => 'El título tiene que tener un máximo de 255',
        ]);
        */

        //request()->input('title') es igual a $_POST['title']

        /*
        $movie = new Movie;
        $movie->title = request()->input('title');
        $movie->rating = request()->input('rating');
        $movie->awards = request()->input('awards');
        $movie->length = request()->input('length');
        $movie->release_date = request()->input('release_date');

        $movie = Movie::find(39);
        $movie->title = 'Cars 3 editado';
        $movie->save();
        */

        //Nueva película
        //Movie::create(request()->all());

        //Edición de película
        //$movie = Movie::find(41);
        //$movie->update(request()->all());

        //Borrar película
        //$movie = Movie::find(41);
        //$movie->delete();

        return redirect('/');

        //dd('Todo bien');
    }
    //-------------------------------
}
