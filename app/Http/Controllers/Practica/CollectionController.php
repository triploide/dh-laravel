<?php

namespace App\Http\Controllers\Practica;

use App\Actor;
use App\Http\Controllers\Controller;
use App\Movie;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    private $promos = [
		0 => [
			'destino' => 'santiago',
			'ida' => "2017-11-07",
			'vuelta' => "2017-11-13",
			'precio' => 6530,
		],
		1 => [
			'destino' => 'santiago',
			'ida' => "2017-12-05",
			'vuelta' => "2017-12-12",
			'precio' => 3177,
		],
		2 => [
			'destino' => 'rio',
			'ida' => "2017-11-10",
			'vuelta' => "2017-11-18",
			'precio' => 7890,
		],
		3 => [
			'destino' => 'rio',
			'ida' => "2017-12-05",
			'vuelta' => "2017-12-12",
			'precio' => 6217,
		],
		4 => [
			'destino' => 'bogota',
			'ida' => "2018-02-013",
			'vuelta' => "2017-02-24",
			'precio' => 12463,
		],
	];

	public function test()
	{

		/*
		$movies = Movie::where('rating', '>', 8)->get();

		$collection = collect($this->promos);
		//dd($collection->implode('ida', ', '));
		//dd($collection->toJson());
		//dd($movies->pluck('title', 'id'));

		$fechaTope = "2018-12-31";

		$preciosEconomicos = $collection->filter(function ($item) use ($fechaTope) {
			return $item['ida'] <= $fechaTope;
		});

		//dd($preciosEconomicos->toArray());

		$mayusculas = $collection->map(function ($item) {
			$item['destino'] = ucwords($item['destino']);
			return $item;
		});

		dd($mayusculas->toArray());
		*/

		$actors = Actor::all();

		$actoresPopulares = $actors->filter(function ($item)  {
			return $item->rating >= 9	;
		});

		dd($actoresPopulares->toArray());

	}
}
