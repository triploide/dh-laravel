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

	private $promos = [
		'santiago' => [
			'ida' => "2017-11-07",
			'vuelta' => "2017-11-13",
			'precio' => 6530,
		],
		'santiago' => [
			'ida' => "2017-12-05",
			'vuelta' => "2017-12-12",
			'precio' => 3177,
		],
		'rio' => [
			'ida' => "2017-11-10",
			'vuelta' => "2017-11-18",
			'precio' => 7890,
		],
		'rio' => [
			'ida' => "2017-12-05",
			'vuelta' => "2017-12-12",
			'precio' => 6217,
		],
		'bogota' => [
			'ida' => "2018-02-013",
			'vuelta' => "2017-02-24",
			'precio' => 12463,
		],
	];

    public function show($id)
    {
    	return "<h1>".$this->peliculas[$id]."</h1>";
    }
}
