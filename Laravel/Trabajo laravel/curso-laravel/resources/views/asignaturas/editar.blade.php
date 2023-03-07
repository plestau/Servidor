<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: auto;
            padding: 50px;
        }    
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>
<body>
    <a href="/asignaturas/lista">Ver listado de asignaturas</a>
    <br>
    <h2>Editar asignatura</h2>
    <form action="/asignaturas/editar/{{ $asignatura->codAs }}" method ="POST">
        @csrf
        {{ method_field('PUT') }}
            <label>Código de asignatura:</label>
            <input type="text" name="codAs" placeholder="Su codigo de asignatura" value="{{ $asignatura->codAs }}">

            <label>nombreAs:</label>
            <input type="text" name="nombreAs" placeholder="Su nombre" value="{{ $asignatura->nombreAs }}">

            <label>Nombre corto:</label>
            <input type="text" name="nombreCortoAs" placeholder="Su nombre corto" value="{{ $asignatura->nombreCortoAs }}">

            <label>Profesor:</label>
            <input type="text" name="profesorAs" placeholder="Su profesor" value="{{ $asignatura->profesorAs }}">

            <label>Color:</label>
            <input type="color" name="colorAs" placeholder="Su color" value="{{ $asignatura->colorAs }}">

        <input type="submit" value="Guardar">
    </form>
</body>
</html>