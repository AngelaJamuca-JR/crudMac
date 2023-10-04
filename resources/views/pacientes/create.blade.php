<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>CREAR PACIENTE</h1>
    <form action="{{route('pacientes.store')}}" method="post">
        @csrf
        Nombre:  <input type="text" name="nombre"><br>
        Apellido:<input type="text" name="apellido"><br>
        Celular: <input type="text" name="celular"><br>
        <input type="submit" value="Agregar Paciente">
    </form>

    <br>
    <a href="{{ route('pacientes.index') }}">REGRESAR A  PACIENTES</a>
</body>
</html>