<!-- resources/views/hotel-not-registered.blade.php -->

<!-- resources/views/hotel-not-registered.blade.php -->

<x-base-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Ya tienes un hotel registrado') }}
        </div>

        <form method="GET" action="{{ route('inicio') }}">
            @csrf
            <div class="mt-4 flex justify-center">
                <x-button>
                    {{ __('Inicio ') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-base-layout>
