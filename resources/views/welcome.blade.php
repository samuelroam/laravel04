<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
<!--
el 4.2 c falla, voy a pasar al 4.3
...
mierda, no puedo
por que el que falla es el que tengo que usar?

-->
        
    </head>
    <body>
        <a href="contacto">contacto</a>
        <a href="blog/2">blog</a>
        <a href="blog2/4/asdf">blog 2</a>
        <a href="saludo">saludo</a>
        
        <p><a href="{{route('saludo')}}">a) Saludo</a></p>
        <p><a href="{{route('saludoNombre',['nombre' => 'ajuanena'])}}">b) Saludo con nombre</a></p>
        <p><a href="{{route('saludoNombreColor',['nombre' => 'ajuanena','color' =>'FF00FF'])}}">c) Saludo con nombre y color</a></p>
        <p><a href="{{route('formulario')}}">d) formulario</a></p>
        <p><a href="{{route('formIdiomas')}}">formulario idiomas</a></p>
    </body>
</html>
