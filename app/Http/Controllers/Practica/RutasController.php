<?php

namespace App\Http\Controllers\Practica;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RutasController extends Controller
{
    public function mostrarFormulario()
    {
    	//return view('practica/form');
    	return view('practica.form');
    }

    public function guardarFormulario()
    {
    	dd($_POST);
    }
}
