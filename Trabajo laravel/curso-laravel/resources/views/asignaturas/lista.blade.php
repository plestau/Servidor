<title>Ver asignaturas</title>
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Asignaturas') }}
        </h2>
    </x-slot>

    @php
        $asignaturas = DB::table('asignaturas')->get();
    @endphp
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>Asignaturas creadas</h1>
                    <!--Tabla con las asignaturas y sus datos-->
                    <table>
                        <tr>
                            <th>Nombre</th>
                            <th>Nombre Corto</th>
                            <th>Profesor</th>
                            <th>Horario</th>
                            <th>Acciones</th>
                        </tr>
                        @foreach ($asignaturas as $asignatura)
                        <tr>
                            <td>{{ $asignatura->nombre }}</td>
                            <td>{{ $asignatura->nombre_corto }}</td>
                            <td>{{ $asignatura->profesor }}</td>
                            <td>{{ $asignatura->horario }}</td>
                            <td>
                                <button style="border: 1px solid black; margin: 5px;">
                                    <a href="{{ route('asignaturas.ver', $asignatura->codAs) }}">Editar</a>
                                </button>
                                <button style="border: 1px solid black; margin: 5px;">
                                    <a href="{{ route('asignaturas.ver', $asignatura->codAs) }}">Borrar</a>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <button style="border: 1px solid black; margin: 5px;">
                    <a href="/asignaturas/crear">Crear asignatura</a>
                </button>
            </div>
        </div>
    </div>
</x-app-layout>