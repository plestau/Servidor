<title>Crear asignaturas</title>
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear Asignaturas') }}
        </h2>
    </x-slot>

    @php
        $asignatura = DB::table('asignaturas')->get();
    @endphp

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>Formulario de creación de asignaturas</h1>
                </div>
                <form action="/asignaturas" method="POST">
                    @csrf
                    <div class="form-group" align="center">
                        <label for="codigo">Código de la asignatura</label>
                        <input type="text" class="form-control" default='' id="codigo" name="codAs" placeholder="Código de la asignatura">
                        <br>
                        <label for="nombre">Nombre de la asignatura</label>
                        <input type="text" class="form-control" id="nombre" name="nombreAs" placeholder="Nombre de la asignatura">
                        <br>
                        @error('nombre')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label for="nombreCorto">Nombre corto de la asignatura</label>
                        <input type="text" class="form-control" id="nombreCorto" name="nombreCortoAs" placeholder="Nombre corto de la asignatura">
                        <br>
                        @error('nombreCorto')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label for="profesor">Profesor de la asignatura</label>
                        <input type="text" class="form-control" id="profesor" name="profesorAs" placeholder="Profesor de la asignatura">
                        <br>
                        @error('profesor')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label for="color">Color de la asignatura</label>
                        <input type="color" class="form-control" name="colorAs" placeholder="Color de la asignatura">
                        @error('color')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <br>
                        <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                        <button id="crear" type="submit">Crear asignatura</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

<style>

</style>