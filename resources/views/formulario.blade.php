<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('mostrarDatos')}}" method="GET">
        <input type="text" name="nombre"><label>nombre</label>
        <input type="text" name="apellido"><label>apellido</label>
        <input type="submit" name="enviar">
    </form>
</body>
</html>