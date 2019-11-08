<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('')}}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" placeholder="Ej: Aitor">
        <br>
        <label>Apellido:</label>
        <input type="text" name="apellido" placeholder="Ej: Fernandez">
        <br>
        <label>Email:</label>
        <input type="text" name="email" value="{{old('email')}}" placeholder="Ej: Fernandez">
        <br>
        <label>Telefono:</label>
        <input type="text" name="telefono" value="{{old('telefono')}}" placeholder="Ej: Fernandez">
        <br>
        <input type="submit" value="Saludar en idioams">
    </form>
</body>
</html>