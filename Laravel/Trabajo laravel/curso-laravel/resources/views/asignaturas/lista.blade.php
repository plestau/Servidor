<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de asignaturas') }}
        </h2>
    </x-slot>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 15px;
        }
        table, td, th {
            border: 1px solid black;
            text-align: center;
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
    <div style="margin: 20px;justify-content:center; text-align: center;">
    <table>
        <tr>
            <th>Código de asignatura</th>
            <th>Nombre</th>
            <th>Nombre corto</th>
            <th>Profesor</th>
            <th>Color</th>
        </tr>
        @foreach ($asignaturas as $asignatura)
        <tr>
            <td>{{ $asignatura->codAs }}</td>
            <td>{{ $asignatura->nombreAs }}</td>
            <td>{{ $asignatura->nombreCortoAs }}</td>
            <td>{{ $asignatura->profesorAs }}</td>
            <td style="background-color:{{$asignatura->colorAs}}">{{ $asignatura->colorAs }}</td>
            <td>
                <a href="/asignaturas/editar/{{$asignatura->codAs}}" style="text-decoration:underline; color:blue">Editar</a>
                <a href="/asignaturas/eliminar/{{$asignatura->codAs}}" onclick="return eliminarAsignatura('Eliminar Asignatura')" style="text-decoration:underline; color:blue"> Eliminar</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="/asignaturas/crear" style="text-decoration:underline; color:blue">Nueva asignatura</a>
    </div>
<script>
    function eliminarAsignatura(value) {
        action = confirm(value) ? true : event.preventDefault()
    }
</script>
</x-app-layout>