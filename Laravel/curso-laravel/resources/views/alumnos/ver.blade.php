<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Laravel</title>
</head>

<body style>
    <a href="/alumnos">Ver listado de alumnos</a>
    <br>
    <h2>Ver alumno</h2>
    <div>
        <p> Nombre: {{ $alumno->nombre }}</p>
        <p> Apellido: {{ $alumno->apellido }}</p>
        <p> Edad: {{ $alumno->edad }}</p>
        <p> Dirección: {{ $alumno->direccion }}</p>
    </div>
</body>

</html>