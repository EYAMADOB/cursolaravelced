<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistaPruebaController extends Controller
{
    public function holaMundo(){
        return view("vistaprueba");
        /*para mandar paramatreso a la vista
        /*->with("dato", "Hola como parametro adicional");*/
    }
}
