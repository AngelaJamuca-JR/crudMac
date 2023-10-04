<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>EDITAR PACIENTE</h1>
    <form action="{{route('pacientes.update', $paciente)}}" method="post">
        @csrf
        @method("PUT")
        Nombre:  <input type="text" name="nombre" value={{ $paciente ->nombre }}><br>
        Apellido:<input type="text" name="apellido" value={{ $paciente ->apellido }}><br>
        Celular: <input type="text" name="celular" value={{ $paciente ->celular }}><br>
        <input type="submit" value="Modificar Paciente" >
    </form>

    <br>
    <a href="{{ route('pacientes.index') }}">REGRESAR A  PACIENTES</a>
</body>
</html>