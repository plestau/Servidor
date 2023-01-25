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

        input[type=text],
        select {
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
    <title>Prueba Laravel</title>
</head>

<body>
    <form action="/alumnos/crear" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" placeholder="Su nombre" value="{{ old('nombre') }}">
        <br/>
        @error('nombre')
            <span style="color:red;">{{ $message }}</span><br/>
        @enderror
        <label>Apellido:</label>
        <input type="text" name="apellido" placeholder="Su Apellido" value="{{ old('apellido') }}">
        <br/>
        @error('apellido')
            <span style="color:red;">{{ $message }}</span><br/>
        @enderror
        <label>Edad:</label>
        <input type="text" name="edad" placeholder="Su edad" value="{{ old('edad') }}">
        <br/>
        @error('edad')
            <span style="color:red;">{{ $message }}</span><br/>
        @enderror
        <label>Dirección:</label>
        <input type="text" name="direccion" placeholder="Su dirección" value="{{ old('direcion') }}">
        <input type="submit" value="Guardar">
        <br/>
        @error('direccion')
            <span style="color:red;">{{ $message }}</span><br/>
        @enderror
    </form>
</body>

</html>