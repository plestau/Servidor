<title>Editar asignatura</title>
<style>
    td, th, table, button{
        border: 1px solid black;
        text-align:center;
        color: darkcyan;
    }

    #tablaEditar, #editarBtn{
        color: white;
        width: 100%;
    }
</style>

<!-- Formulario de edición de la asignatura pasada por parámetro -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar asignatura') }}
        </h2>
    </x-slot>
    <div id="editarAs">
        <form action="{{route('asignaturas.update', $asignatura->codAs)}}" method="POST">
            @csrf
            <table id="tablaEditar">
                <tr>
                    <th>Nombre</th>
                    <th>Nombre Corto</th>
                    <th>Profesor</th>
                    <th>Color</th>
                </tr>
                <tr>
                    <td><input type="text" name="nombreAs" value="{{$asignatura->nombreAs}}"></td>
                    <td><input type="text" name="nombreCortoAs" value="{{$asignatura->nombreCortoAs}}"></td>
                    <td><input type="text" name="profesorAs" value="{{$asignatura->profesorAs}}"></td>
                    <td><input type="color" name="colorAs" value="{{$asignatura->colorAs}}"></td>
                    <input type="hidden" name="id_user" value="{{$asignatura->id_user}}">
                    <input type="hidden" name="codAs" value="{{$asignatura->codAs}}">
                </tr>
            </table>
            <button id="editarBtn" type="submit">Editar asignatura</button>
    </div>
</x-app-layout>
