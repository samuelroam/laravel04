<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    function saludo(){
        return view('saludo');
    }
    function saludoConNombre($nombre){
        return view('saludoConNombre',['nombre'=>$nombre]);
    }
}
