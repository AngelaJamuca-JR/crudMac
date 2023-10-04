<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1>Pagina principal de pacientes</h1>


    <table style="border: 1px solid black;">
            <thead>
                <tr>
                    <th style="border: 1px solid black;">id</th>
                    <th style="border: 1px solid black;">Nombre</th>
                    <th style="border: 1px solid black;">Apellido</th>
                    <th style="border: 1px solid black;">Celular</th>
                    <th style="border: 1px solid black;"> Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pacientes as $p)
                    
                
                <tr>
                    <td style="border: 1px solid black;">{{ $p->idPaciente }}</td>
                    <td style="border: 1px solid black;">{{ $p->nombre }}</td>
                    <td style="border: 1px solid black;">{{ $p->apellido }}</td>
                    <td style="border: 1px solid black;">{{ $p->celular }}</td>
                    <td  style="border: 1px solid black;">
                                                             <a href="{{ route('pacientes.show',$p ->idPaciente) }}">VER</a>
                                                             <a href="{{ route('pacientes.edit',$p ->idPaciente) }}">EDITAR</a>
                                                            Borrar
                                                            </td>
                </tr>

                @endforeach
             
            </tbody>

    </table>


    {{$pacientes-> links()}}

    <br>
    <a href="{{ route('pacientes.create') }}">CREAR UN  PACIENTES</a>
</body>
</html>