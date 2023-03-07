<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Horas') }}
        </h2>
    </x-slot>
    <style>
        table{
            margin-bottom: 5rem;
        }
        th, td {
            padding: 15px;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        input:hover{
            cursor: pointer;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" style="display: flex; justify-content:space-between; align-items: center">
                    {{ __("Estas son tus horas") }}
                    <form action="horas" method="GET">
                        <select name="asignatura" id="asignatura">
                            <option value="0">Todas</option>
                            @foreach ($asignaturas as $asignatura)
                                <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                            @endforeach
                        <input class="font-bold py-2 px-4" type="submit" value="Filtrar">
                    </form>
                    <a href="{{ route('horas.create') }}" >Añadir hora</a>
                </div>
            </div>
        </div>
    </div>
    <div style="display: flex; justify-content:center">
        <table>
            <tr>
                <th>Asignatura</th>
                <th>Dia</th>
                <th>Hora</th>
                <th>Acciones</th>
            </tr>
            @foreach ($horas as $hora)
                <tr>
                    <td>{{ $hora->nombreCortoAs }}</td>
                        @switch($hora->diaH)
                            @case(1)
                                <td>Lunes</td>
                                @break
                            @case(2)
                                <td>Martes</td>
                                @break
                            @case(3)
                                <td>Miércoles</td>
                                @break
                            @case(4)
                                <td>Jueves</td>
                                @break
                            @case(5)
                                <td>Viernes</td>
                                @break
                        @endswitch
                    @switch($hora->horaH)
                        @case(1)
                            <td>8:15 - 9:15</td>
                            @break
                        @case(2)
                            <td>9:15 - 10:15</td>
                            @break
                        @case(3)
                            <td>10:15 - 11:15</td>
                            @break
                        @case(4)
                            <td>11:45 - 12:45</td>
                            @break
                        @case(5)
                            <td>12:45 - 13:45</td>
                            @break
                        @case(6)
                            <td>13:45 - 14:45</td>
                            @break
                    @endswitch
                    <td>
                        <a href="/horas/edit/{{$hora->diaH}}/{{$hora->horaH}}" style="text-decoration:underline; color:blue">Editar</a>
                        <a href="/horas/delete/{{$hora->codAs}}/{{$hora->diaH}}/{{$hora->horaH}}" style="text-decoration:underline; color:blue" onclick="confirmDelete()">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <script>
        function confirmDelete() {
            return confirm("¿Estás seguro de que quieres eliminar esta hora?");
        }
    </script>
</x-app-layout>