<!-- resources/views/hotel-not-registered.blade.php -->

<!-- resources/views/hotel-not-registered.blade.php -->

<x-base-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Para acceder a esta sección, primero debes registrar tu hotel.') }}
        </div>

        <form method="GET" action="{{ route('register-hotel') }}">
            @csrf
            <div class="mt-4 flex justify-center">
                <x-button>
                    {{ __('Registrar Hotel ') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-base-layout>
