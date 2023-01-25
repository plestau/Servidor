<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Horario') }}
        </h2>
    </x-slot>

    <div class="tabla">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
            <table align="center" style="background-color:white; border: 1px #000000 solid; height:500px; width:600px; text-align:center">
            <thead>
                <tr>
                    <th style="border: 1px #000000 solid;width:200px;">Horas</th>
                    <th style="border: 1px #000000 solid;width:200px;">LUNES</th>
                    <th style="border: 1px #000000 solid;width:200px;">MARTES</th>
                    <th style="border: 1px #000000 solid;width:200px;">MIÉRCOLES</th>
                    <th style="border: 1px #000000 solid;width:200px;">JUEVES</th>
                    <th style="border: 1px #000000 solid;width:200px;">VIERNES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border: 1px #000000 solid">8 :15 - 9:15</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                </tr>
                <tr>
                    <td style="border: 1px #000000 solid">9:15 - 10:15</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                </tr>
                <tr>
                    <td style="border: 1px #000000 solid">10:15 - 11:15</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                </tr>
                <tr style="background-color: grey; width:500px">
                    <td style="border: 1px #000000 solid">11:15 - 11:45</td>
                    <td style="border: 1px #000000 solid;text-align:center; font-size:20px" colspan="6">Recreo</td>
                </tr>
                <tr>
                    <td style="border: 1px #000000 solid">11:45 - 12:45</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                </tr>
                <tr>
                    <td style="border: 1px #000000 solid">12:45 - 13:45</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                </tr>
                <tr>
                    <td style="border: 1px #000000 solid">13:45 - 14:45</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                    <td style="border: 1px #000000 solid">Vacío</td>
                </tr>
            </tbody>
        </table>
            </div>
        </div>
    </div>
</x-app-layout>