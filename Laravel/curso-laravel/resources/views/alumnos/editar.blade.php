<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Laravel</title>
</head>

<body>
    <a href="/alumnos">Ver listado de alumnos</a>
    <br>
    <h2>Editar alumno</h2>
    <div>
        <form action="/alumnos/editar/{{ $alumno->id}}" method="POST">
            @csrf
            {{ method_field('PUT') }}
            <label>Nombre:</label>
            <input type="text" name="nombre" placeholder="Su nombre" value="{{ $alumno->nombre}}">
            <label>Apellido:</label>
            <input type="text" name="apellido" placeholder="Su Apellido" value="{{ $alumno->apellido}}">
            <label>Edad:</label>
            <input type="text" name="edad" placeholder="Su edad" value="{{ $alumno->edad}}">
            <label>Dirección:</label>
            <input type="text" name="direccion" placeholder="Su dirección" value="{{ $alumno->direccion}}">
            <input type="submit" value="Guardar">
        </form>
    </div>
</body>

</html>