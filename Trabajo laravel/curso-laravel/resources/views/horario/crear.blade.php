<title>Crear Horario</title>
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear horario') }}
        </h2>
    </x-slot>

    @php
        $asignaturas = DB::table('asignaturas')->get();
    @endphp

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form align="center" action="/horario/crear" method="POST">
                        @csrf
                        <p>Selecciona la asignatura</p>
                        <select name="asignatura" id="asignatura">
                            @foreach ($asignaturas as $asignatura)
                                <option>{{ $asignatura->nombreAs }}</option>
                            @endforeach
                        </select>
                        <p>Selecciona el día</p>
                        <select name="dia" id="dia">
                            <option value="Lunes">Lunes</option>
                            <option value="Martes">Martes</option>
                            <option value="Miércoles">Miércoles</option>
                            <option value="Jueves">Jueves</option>
                            <option value="Viernes">Viernes</option>
                        </select>
                        <div id="horas">
                            <p>Primera hora (8:15/9:15) <input type="checkbox" name="primera"></p>
                            <p>Segunda hora (9:15/10:15)<input type="checkbox" name="segunda"></p>
                            <p>Tercera hora (10:15/11:15)<input type="checkbox" name="tercera"></p>
                            <p>Cuarta hora (11:45/12:45)<input type="checkbox" name="cuarta"></p>
                            <p>Quinta hora (12:45/13:45)<input type="checkbox" name="quinta"></p>
                            <p>Sexta hora (13:45/14:45)<input type="checkbox" name="sexta"></p>
                        </div><br>
                        <button style="border: 1px solid black; margin: 5px;">
                            <a href="/horario/crear">Crear horario</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    #horas {
        display: flex;
        justify-content: center;
        flex-direction: column;
        flex-wrap: wrap;
    }
</style>