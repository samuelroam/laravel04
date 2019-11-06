<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('mostrarDatos2')}}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" placeholder="Ej: Aitor">
        <br>
        <label>Apellido:</label>
        <input type="text" name="apellido" placeholder="Ej: Fernandez">
        <br>
        <input type="submit" value="Saludar en idioams">
    </form>
    <br>
    @isset($saludos)
        @foreach($saludos as $saludo)
            <div class="title m-b-md">
                {{$saludo -> saludo}} {{$nombre}}!
            </div>
        @endforeach
    @endisset
</body>
</html>