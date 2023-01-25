<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: auto;
            padding: 50px;
        }

        table,
        td,
        th {
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th {
            height: 70px;
        }

        td {
            height: 30px;
        }

        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
    </style>
    <title>Prueba Laravel</title>
</head>

<body>
    <script>
        function eliminarAlumno(value) {
            action = confirm(value) ? true : event.preventDefault()
        }
    </script>
    <h2>Listado de alumnos<h2>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
                @foreach ($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->apellido }}</td>
                    <td>{{ $alumno->edad }}</td>
                    <td>{{ $alumno->direccion }}</td>
                    <td>
                        <a href="/alumnos/ver/{{$alumno->id}}">Ver</a>
                        <a href="/alumnos/editar/{{$alumno->id}}">Editar</a>
                        <a href="/alumnos/eliminar/{{$alumno->id}}" onclick="return eliminarAlumno('Eliminar Alumno')"> Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </table>
</body>
<br>
<a href="/alumnos/crear" class="button">Crear alumno</a>

</html>