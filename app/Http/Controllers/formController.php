<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class formController extends Controller
{
    public function formulario(){
        return view('formulario');
    }
    public function mostrarDatos(Request $request){
        $nombre = $request -> input('nombre');
        $apellido = $request -> input('apellido');
        return view('saludoNombre',['nombre'=>$nombre,'apellido'=>$apellido]);
    }

    public function mostrarFormIdiomas(){
        return view('formIdiomas');
    }
    public function mostrarDatos2(Request $request){
        $json = File::get('json/saludos.json');
        $saludos = json_decode($json);
        $nombre = $request -> input('nombre')." ".$request -> input('apellido');
        return view('formIdiomas',['saludos'=>$saludos,'nombre'=>$nombre]);
    }
}
