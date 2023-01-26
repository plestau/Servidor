<title>Editar horario</title>
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
            {{ __('Editar horario') }}
        </h2>
    </x-slot>
    <div id="editarAs">
        <form action="{{route('horario.update', $horario->codigoAs)}}" method="POST">
            @csrf
            <table id="tablaEditar">
                <tr>
                    <th>Dia</th>
                    <th>Hora</th>
                    <th>Asignatura</th>
                </tr>
                <tr>
                    <td>
                        <select name="diaH" id="diaH">
                            <option value="Lunes">Lunes</option>
                            <option value="Martes">Martes</option>
                            <option value="Miercoles">Miercoles</option>
                            <option value="Jueves">Jueves</option>
                            <option value="Viernes">Viernes</option>
                        </select>
                    </td>
                    <td>
                        <select name="horaH" id="horaH">
                            <option value="8:00">8:15</option>
                            <option value="9:00">9:15</option>
                            <option value="10:00">10:15</option>
                            <option value="11:00">11:45</option>
                            <option value="12:00">12:45</option>
                            <option value="13:00">13:45</option>
                            <option value="14:00">14:45</option>
                        </select>
                    </td>
                    <td>
                        <select name="nombreCortoAs" id="nombreCortoAs">
                            @foreach ($asignaturas as $asignatura)
                                <option value="{{$asignatura->nombreCortoAs}}">{{$asignatura->nombreCortoAs}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
            </table>
            <button id="editarBtn" type="submit">Editar asignatura</button>
    </div>
</x-app-layout>
