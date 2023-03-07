<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Horas') }}
        </h2>
    </x-slot>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
        }
        input[type="submit"]:hover{
            cursor: pointer;
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <div style="display: flex; justify-content:space-between; align-items: center">
                    {{ __("Nueva hora") }}
                    <a href="{{ route('horas') }}"style="text-decoration:underline; color:blue">Ver horas</a>
                </div>
            </div>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div style="display:flex; justify-content:center;">
        <form action="/horas/create" method ="POST" style="display: flex; flex-direction: column; width:50vw;">
            @csrf
            <label for="asignatura_id">Asignatura:</label>
            <select name="asignatura_id">
                @foreach ($asignaturas as $asignatura)
                    <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreAs }}</option>
                @endforeach
            </select>
            <label for="horaH">Hora:</label>
            <select name="horaH">
                <option value="1">8:15 - 9:15</option>
                <option value="2">9:15 - 10:15</option>
                <option value="3">10:15 - 11:15</option>
                <option value="4">11:45 - 12:45</option>
                <option value="5">12:45 - 13:45</option>
                <option value="6">13:45 - 14:45</option>
            </select>
            <label for="diaH">Dia:</label>
            <select name="diaH">
                <option value="1">Lunes</option>
                <option value="2">Martes</option>
                <option value="3">Miercoles</option>
                <option value="4">Jueves</option>
                <option value="5">Viernes</option>
            <select>
            <input type="submit" value="Guardar" style="text-decoration:underline; color:blue">
        </form>
    </div>
</x-app-layout>