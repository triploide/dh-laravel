<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function ejemplo1()
    {
    	$condicion = false;
    	$nombre = 'Laravel';

    	return view('blade', compact('condicion','nombre'));
    	//return view('blade')->with('condicion', $condicion);
    }

    public function bootstrap()
    {
    	return view('bootstrap', ['titulo' => 'Bootstrap']);
    }
}
