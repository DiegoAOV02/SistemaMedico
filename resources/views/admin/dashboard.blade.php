<?php
use Illuminate\Support\Facades\Auth;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!-- Incluye Tailwind CSS desde CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <x-app-layout>
        <!--Contenido de la tabla de Pacientes-->
        <div class="mt-6 bg-gray-200  p-6 rounded-lg shadow">
            <h3 class="text-lg font-semibold text-gray-900">Lista de usuarios Pacientes</h3>
            {{-- Buscador --}}
            <div class="flex justify-between items-center mb-4">
                <input type="text" id="pacientes_search" placeholder="Buscar por nombre de paciente..."
                    class="w-full p-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600">
            </div>
            {{-- Tabla --}}
            <div class="overflow-x-auto flex justify-center">
                <table class="min-w-full bg-white  rounded-lg shadow-md">
                    <thead>
                        <tr class="bg-gray-200  text-black  uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Nombre</th>
                            <th class="py-3 px-6 text-left">Apellido</th>
                            <th class="py-3 px-6 text-left">Teléfono</th>
                            <th class="py-3 px-6 text-left">Acciones</th>
                        </tr>
                    </thead>

                    <tbody class="text-gray-600  text-sm">
                        @foreach ($pacientes as $paciente)
                            <tr class="border-b border-gray-200 ">
                                <td class="py-3 px-6 text-left">{{ $paciente->nombre }}</td>
                                <td class="py-3 px-6 text-left">{{ $paciente->apellido }}</td>
                                <td class="py-3 px-6 text-left">{{ $paciente->telefono }}</td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('pacientes.edit', $paciente->id) }}"
                                            class="ms-4 inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                            {{ __('Modificar') }}
                                        </a>
                                        <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST"
                                            onsubmit="return confirm('¿Está seguro de que desea eliminar este paciente?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="ms-4 inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                {{ __('Eliminar') }}
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $pacientes->links() }}
            </div>
        </div>

        <!--Contenido de la tabla de Médicos-->
        <div class="mt-6 bg-gray-200 p-6 rounded-lg shadow">
            <h3 class="text-lg font-semibold text-gray-900 ">Lista de usuarios Médicos</h3>
            {{-- Buscador --}}
            <div class="flex justify-between items-center mb-4">
                <input type="text" placeholder="Buscar por nombre de médico..."
                    class="w-full p-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600">
            </div>
            {{-- Tabla --}}
            <div class="overflow-x-auto flex justify-center">
                <table class="min-w-full bg-white  rounded-lg shadow-md">
                    <thead>
                        <tr class="bg-gray-200  text-gray-600  uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Nombre</th>
                            <th class="py-3 px-6 text-left">Apellido</th>
                            <th class="py-3 px-6 text-left">Teléfono</th>
                            <th class="py-3 px-6 text-left">Acciones</th>
                        </tr>
                    </thead>

                    <tbody class="text-gray-600  text-sm">
                        @foreach ($medicos as $medico)
                            <tr class="border-b border-gray-200 ">
                                <td class="py-3 px-6 text-left">{{ $medico->nombre }}</td>
                                <td class="py-3 px-6 text-left">{{ $medico->apellido }}</td>
                                <td class="py-3 px-6 text-left">{{ $medico->telefono }}</td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('medicos.edit', $medico->id) }}"
                                            class="ms-4 inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                            {{ __('Modificar') }}
                                        </a>
                                        <form action="{{ route('medicos.destroy', $medico->id) }}" method="POST"
                                            onsubmit="return confirm('¿Está seguro de que desea eliminar este médico?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="ms-4 inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                {{ __('Eliminar') }}
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $medicos->links() }}
            </div>
        </div>

        <!--Contenido de la tabla de Secretarios-->
        <div class="mt-6 bg-gray-200 p-6 rounded-lg shadow">
            <h3 class="text-lg font-semibold text-gray-900 ">Lista de usuarios Secretarios</h3>
            {{-- Buscador --}}
            <div class="flex justify-between items-center mb-4">
                <input type="text" placeholder="Buscar por nombre de secretario..."
                    class="w-full p-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600">
            </div>
            {{-- Tabla --}}
            <div class="overflow-x-auto flex justify-center">
                <table class="min-w-full bg-white  rounded-lg shadow-md">
                    <thead>
                        <tr class="bg-gray-200 -700 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Nombre</th>
                            <th class="py-3 px-6 text-left">Apellido</th>
                            <th class="py-3 px-6 text-left">Teléfono</th>
                            <th class="py-3 px-6 text-left">Acciones</th>
                        </tr>
                    </thead>

                    <tbody class="text-gray-600  text-sm">
                        @foreach ($secretarios as $secretario)
                            <tr class="border-b border-gray-200 ">
                                <td class="py-3 px-6 text-left">{{ $secretario->nombre }}</td>
                                <td class="py-3 px-6 text-left">{{ $secretario->apellido }}</td>
                                <td class="py-3 px-6 text-left">{{ $secretario->telefono }}</td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('secretarios.edit', $secretario->id) }}"
                                            class="ms-4 inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                            {{ __('Modificar') }}
                                        </a>
                                        <form action="{{ route('secretarios.destroy', $secretario->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('¿Está seguro de que desea eliminar este secretario?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="ms-4 inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                {{ __('Eliminar') }}
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $secretarios->links() }}
            </div>
        </div>

        <!--Contenido de la tabla de Enfermeros-->
        <div class="mt-6 bg-gray-200 p-6 rounded-lg shadow">
            <h3 class="text-lg font-semibold text-gray-900 ">Lista de usuarios Enfermeros</h3>
            {{-- Buscador --}}
            <div class="flex justify-between items-center mb-4">
                <input type="text" placeholder="Buscar por nombre de enfermero..."
                    class="w-full p-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600">
            </div>
            {{-- Tabla --}}
            <div class="overflow-x-auto flex justify-center">
                <table class="min-w-full bg-white  rounded-lg shadow-md">
                    <thead>
                        <tr class="bg-gray-200  text-gray-600  uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Nombre</th>
                            <th class="py-3 px-6 text-left">Apellido</th>
                            <th class="py-3 px-6 text-left">Teléfono</th>
                            <th class="py-3 px-6 text-left">Acciones</th>
                        </tr>
                    </thead>

                    <tbody class="text-gray-600  text-sm">
                        @foreach ($enfermeros as $enfermero)
                            <tr class="border-b border-gray-200 ">
                                <td class="py-3 px-6 text-left">{{ $enfermero->nombre }}</td>
                                <td class="py-3 px-6 text-left">{{ $enfermero->apellido }}</td>
                                <td class="py-3 px-6 text-left">{{ $enfermero->telefono }}</td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('enfermeros.edit', $enfermero->id) }}"
                                            class="ms-4 inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                            {{ __('Modificar') }}
                                        </a>
                                        <form action="{{ route('enfermeros.destroy', $enfermero->id) }}" method="POST"
                                            onsubmit="return confirm('¿Está seguro de que desea eliminar este enfermero?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="ms-4 inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                {{ __('Eliminar') }}
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $enfermeros->links() }}
            </div>
        </div>
    </x-app-layout>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            function fetch_data(page, section, query) {
                $.ajax({
                    url: "/fetch-data",
                    method: "GET",
                    data: {
                        page: page,
                        section: section,
                        query: query
                    },
                    success: function(data) {
                        $('#' + section + '_table').html(data);
                    }
                });
            }

            // Paginación
            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                let page = $(this).attr('href').split('page=')[1];
                let section = $(this).closest('table').data('section');
                let query = $('#' + section + '_search').val();
                fetch_data(page, section, query);
            });

            // Búsqueda en tiempo real
            $('input[type="text"]').on('keyup', function() {
                let section = $(this).data('section');
                let query = $(this).val();
                fetch_data(1, section, query);
            });
        });
    </script>
</body>

</html>
