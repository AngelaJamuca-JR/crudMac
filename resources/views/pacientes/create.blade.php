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

    <div class= "container p-4">
        <div class= "row">
            <div class= "col-md-4">
                <div class= "card card-body">
                    <h1>CREAR PACIENTE</h1>
                </div>
            </div>
        </div>
    </div>





    <div class= "container p-4">
        <div class= "row">
            <div class= "col-md-4">
                <div class= "card card-body">
                    <form action="{{route('pacientes.store')}}" method="post">
                        @csrf
                        Nombre:  <input type="text" name="nombre" class="form-control" placeholder="Ingrese su Nombre" required><br>
                        Apellido:<input type="text" name="apellido" class="form-control" required><br>
                        Celular: <input type="text" name="celular" class="form-control" required><br>
                        <input type="submit" value="Agregar Paciente" class="btn btn-success btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>


   

    <br>

    
    <div class= "container p-4">
        <div class= "row">
            <div class= "col-md-4">
                <div class= "card card-body">
                    <a href="{{ route('pacientes.index') }}">REGRESAR A  PACIENTES</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>