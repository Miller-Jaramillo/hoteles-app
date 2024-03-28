<x-form-section submit="updatePersonaliza">
    <x-slot name="title">
        {{ __('Crea tu hotel') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Aqui agrega el nombre del hotel, tu slogan y carga las mejores imagenes que muestren lo hermoso que es tu hotel') }}
    </x-slot>


    <x-slot name="form">

        <div class="col-span-6 sm:col-span-4">
            <x-label for="name" value="{{ __('Nombre del hotel') }}" />
            <x-input id="name" type="text" class="mt-1 block w-full" wire:model="name" autocomplete="current-password" />
            <x-input-error for="name" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="slogan" value="{{ __('Slogan principal') }}" />
            <x-input id="slogan" type="text" class="mt-1 block w-full" wire:model="slogan" autocomplete="current-password" />
            <x-input-error for="slogan" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="final_slogan" value="{{ __('Slogan Final') }}" />
            <x-input id="final_slogan" type="text" class="mt-1 block w-full" wire:model="final_slogan" autocomplete="new-final_slogan" />
            <x-input-error for="final_slogan" class="mt-2" />
        </div>


    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
            {{ __('Guardado.') }}
        </x-action-message>

        <x-button class="dark:bg-green-300 bg-green-600">
            {{ __('Guardar') }}
        </x-button>
    </x-slot>
</x-form-section>
