<x-form-section submit="updateUser">
    <x-slot name="title">
        {{ __('Datos de contacto') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Agrega tus informacion y conecta con tus huespedes.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4 grid grid-cols-2 gap-2">
            <div class="col-span-1 sm:col-span-1">
                <x-label for="phone" value="{{ __('Telefono/celular') }}" />
                <x-input id="phone" type="text" class="mt-1 block w-full" wire:model="phone"
                    autocomplete="current-phone" />
                <x-input-error for="phone" class="mt-2" />
            </div>

            <div class="col-span-1 sm:col-span-1">
                <x-label for="extension" value="{{ __('Extension') }}" />
                <x-input id="extension" type="text" class="mt-1 block w-full" wire:model="extension"
                    autocomplete="new-extension" />
                <x-input-error for="extension" class="mt-2" />
            </div>


            <div class="col-span-1 sm:col-span-1">
                <x-label for="departament" value="{{ __('Departamento') }}" />
                <x-input id="departament" type="text" class="mt-1 block w-full" wire:model="departament"
                    autocomplete="new-password" />
                <x-input-error for="departament" class="mt-2" />
            </div>

            <div class="col-span-1 sm:col-span-1">
                <x-label for="city" value="{{ __('Ciudad/Municipio') }}" />
                <x-input id="city" type="text" class="mt-1 block w-full" wire:model="city"
                    autocomplete="new-password" />
                <x-input-error for="city" class="mt-2" />
            </div>
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
