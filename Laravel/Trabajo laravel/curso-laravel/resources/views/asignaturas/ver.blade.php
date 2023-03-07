<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/asignaturas">Ver listado de asignaturas</a>
    <br>
    <h2>Ver asignatura</h2>
    <div>
        <p> codAs: {{ $asignatura->codAs}}</p>
        <p> nombreAs: {{ $asignatura->nombreAs}}</p>
        <p> nombreCortoAs: {{ $asignatura->nombreCortoAs}}</p>
        <p> profesorAs: {{ $asignatura->profesorAs}}</p>
        <p> colorAs: {{ $asignatura->colorAs}}</p>
    </div>
</body>
</html>