<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar asignatura') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>Formulario de edición de {{ $asignatura->nombreAs }}</h1>
                    <hr>
                </div>
                <form action="/asignaturas" method="POST">
                    @csrf
                    <table id="tablaEditar">
                        <tr>
                            <th>Nombre</th>
                            <th>Nombre corto</th>
                            <th>Profesor</th>
                            <th>Color</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="nombreAs" id="nombreAs" value="{{$asignatura->nombreAs}}"></td>
                            <td><input type="text" name="nombreCortoAs" id="nombreCortoAs" value="{{$asignatura->nombreCortoAs}}"></td>
                            <td><input type="text" name="profesorAs" id="profesorAs" value="{{$asignatura->profesorAs}}"></td>
                            <td><input style="background-color: {{$asignatura->colorAs}};" type="color" name="colorAs" id="colorAs" value="{{$asignatura->colorAs}}"></td>
                            <input type="hidden" name="id_user" id="id_user" value="{{$asignatura->id_user}}">
                            <input type="hidden" name="codAs" id="codAs" value="{{$asignatura->codAs}}.edit">
                        </tr>
                    </table>
                    <button id="editarBtn" type="submit">Editar asignatura</button>
                </form>
</x-app-layout>

<style>
    td, th, table, #editarBtn {
        text-align: center;
        color: darkcyan;
    }

    #editarBtn{
        border: 1px solid black;
        color: greenyellow;
        width: 100%;
        margin-top: 20px;
    }

    #tablaEditar{
        color: white;
        width: 100%;
    }
</style>