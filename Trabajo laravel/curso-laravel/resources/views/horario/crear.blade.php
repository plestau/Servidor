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
                    <!--Formulario con las asignaturas y sus horas-->
                    <form action="/horario/ver" method="POST">
                        @csrf
                        <div id="horas" align="center">
                            <div>
                                <label for="diaH">Dia</label>
                                <select name="diaH" id="diaH">
                                    <option value="Lunes">Lunes</option>
                                    <option value="Martes">Martes</option>
                                    <option value="Miercoles">Miercoles</option>
                                    <option value="Jueves">Jueves</option>
                                    <option value="Viernes">Viernes</option>
                                </select>
                            </div>
                            <div>
                                <label for="horaH">Hora</label>
                                <select name="horaH" id="horaH">
                                    <option value="8:00">8:15</option>
                                    <option value="9:00">9:15</option>
                                    <option value="10:00">10:15</option>
                                    <option value="11:00">11:45</option>
                                    <option value="12:00">12:45</option>
                                    <option value="13:00">13:45</option>
                                    <option value="14:00">14:45</option>
                                </select>
                            </div>
                            <div>
                                <label for="nombreCortoAs">Asignatura</label>
                                <select name="nombreCortoAs" id="nombreCortoAs">
                                    @foreach ($asignaturas as $asignatura)
                                        <option value="{{$asignatura->nombreCortoAs}}">{{$asignatura->nombreCortoAs}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button id="crear" type="submit">Crear</button>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    #crear{
        border: 1px solid black;
        border-radius: 30%;
        width: 10%;
        margin-top: 20px;
    }

    #diaH, #horaH, #nombreCortoAs {
        margin: 10px;
    }

    #horas > div > label {
        margin: 10px;
    }

    #horas > div > select {
        margin: 10px;
    }
</style>