<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
   

    function saludo(){
        return view('saludo');
    }
    function saludoNombre($nombre){
        return view('saludoNombre',['nombre'=>$nombre]);
    }
    function saludoNombreColor($nombre,$color='0000FF'){
        return view('saludoNombreColor',['nombre'=>$nombre, 'color'=>$color]);
    }



    public function formulario(){
        return view('formulario');
    }
    public function mostrarDatos(Request $request){
        $nombre = $request -> input('nombre');
        $apellido = $request -> input('apellido');
        return view('saludoNombre',['nombre'=>$nombre,'apellido'=>$apellido]);
    }
}
