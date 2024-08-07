<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @if ($servicio)
                <div>
                    <p class="text-gray-800 dark:text-gray-200">
                        {{ __('Crear una nueva cita médica') }} <strong>{{ 'de ' }}{{ $servicio }}</strong>
                    </p>
                </div>
            @endif
        </h2>
    </x-slot>

    @include('fullcalendar.master')
</x-app-layout>
