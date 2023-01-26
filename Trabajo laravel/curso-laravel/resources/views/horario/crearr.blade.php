<title>Crear Horario</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear horario') }}
        </h2>
    </x-slot>

    @php
    $horario = DB::table('horas')->get();
    $asignaturas = DB::table('asignaturas')->get();
    @endphp

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form align="center" action="/horario/ver" method="POST">
                        @csrf
                        <table align="center" style="background-color:white; border: 1px #000000 solid; height:500px; width:600px; text-align:center">
                            <thead>
                                <tr>
                                    <th name="diaH" style="border: 1px #000000 solid">Horas</th>
                                    <th name="diaH" style="border: 1px #000000 solid">Lunes</th>
                                    <th name="diaH" style="border: 1px #000000 solid">Martes</th>
                                    <th name="diaH" style="border: 1px #000000 solid">Miércoles</th>
                                    <th name="diaH" style="border: 1px #000000 solid">Jueves</th>
                                    <th name="diaH" style="border: 1px #000000 solid">Viernes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border: 1px #000000 solid">8:15 - 9:15</td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                </tr>
                                <tr>
                                    <td style="border: 1px #000000 solid">9:15 - 10:15</td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>        
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>                                            
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                </tr>
                                <tr>
                                    <td style="border: 1px #000000 solid">10:15 - 11:15</td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                </tr>
                                <tr style="background-color: grey; width:500px">
                                    <td style="border: 1px #000000 solid">11:15 - 11:45</td>
                                    <td style="border: 1px #000000 solid;text-align:center; font-size:20px" colspan="6">Recreo</td>
                                </tr>
                                <tr>
                                    <td name="horaH" style="border: 1px #000000 solid">11:45 - 12:45</td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                </tr>
                                <tr>
                                    <td style="border: 1px #000000 solid">12:45 - 13:45</td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                </tr>
                                <tr>
                                    <td style="border: 1px #000000 solid">13:45 - 14:45</td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                    <td name="horaH" style="border: 1px #000000 solid"><select style="border:none" name="codigoAs" id="asignatura">
                                            <option selected="selected" value="0">Seleccione</option>
                                            @foreach ($asignaturas as $asignatura)
                                            <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                                            @endforeach
                                        </select></td>
                                </tr>
                            </tbody>
                        </table>
                        <button id="crear" style="border: 1px solid black; margin: 5px;">
                            <a href="/horario/ver">Crear horario</a>
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