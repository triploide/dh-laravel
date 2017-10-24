<?php

namespace App\Http\Controllers\Practica;

use App\Actor;
use App\Http\Controllers\Controller;
use App\Movie;
use Illuminate\Http\Request;

class EloquentController extends Controller
{
    public function all()
    {
    	$actors = Actor::all();
    	return view('practica.actors', compact('actors'));
    	/*
    	foreach ($actors as $actor) {
    		echo $actor->getNombreCompleto() . '<br>';
    	}
    	*/
    	//dd($actors->toArray());
    }

    public function find($actorId)
    {
    	$actor = Actor::find($actorId);
    	echo $actor->getNombreCompleto();
    }

    public function where()
    {
    	$movie = Movie::where('rating', '>=', 8)
    		->where('awards', '>=', 5)
    		->get()
    	;
    	//$movies = \DB::table('movies')->where('id', 3)->get();
    	dd($movies->toArray());
    }

    public function whereAnidado()
    {
    	$movies = Movie::where('release_date', '>=', '2017-01-01 00:00:00')
    		->orWhere(function ($query) {
    			$query->where('rating', '>=', 8)
    			->where('awards', '>=', 5);
    		})
    		->get()
    	;
    	dd($movies->toArray());
    }
}
