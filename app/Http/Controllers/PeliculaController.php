<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{

	private $peliculas = [
		1 => 'Avatar',
		2 => 'Moon',
		3 => 'Up'
	];

    public function show($id)
    {
    	return "<h1>".$this->peliculas[$id]."</h1>";
    }
}
