<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
    public function rutaConControlador()
    {
    	return "Hola desde el controller";
    }

    public function ejemploParametro($parametro)
    {
    	return $parametro;
    }
}
