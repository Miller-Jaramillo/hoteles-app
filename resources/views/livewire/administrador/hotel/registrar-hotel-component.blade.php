<div class=" py-4 py-4">
    <x-register-hotel-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="grid grid-cols-2 gap-5 py-4 px-4">
            <div class="col-span-1  ">
                <div>
                    <x-label for="cover-photo"
                        class="text-xs font-semibold leading-6 dark:text-gray-100 text-gray-900 tracking-widest uppercase">
                        Foto de perfil de tu hotel</x-label>
                    @if ($previews)
                        <div>
                            @foreach ($previews as $preview)
                                <div
                                    class="mt-2 flex justify-center sm:rounded-lg rounded-md dark:bg-gray-900 border border-dashed border-indigo-900/25 dark:border-indigo-100/25 px-4 py-4">
                                    <div class="text-center">
                                        <img src="{{ $preview['url'] }}" alt="Preview"
                                            class="h-36 w-36 rounded-full object-cover">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div
                            class="mt-2 flex justify-center sm:rounded-lg rounded-md dark:bg-gray-900 border border-dashed border-indigo-900/25 dark:border-indigo-100/25  py-2">
                            <div class="text-center">
                                <img src="{{ asset('img/img2.jpg') }}" alt="Default Image"
                                    class="h-36 w-36 rounded-full object-cover">
                            </div>
                        </div>
                    @endif

                    <div class="mt-2">
                        <input type="file" id="file" wire:model="files" accept="image/*,video/*" multiple
                            class="mt-1">
                    </div>
                </div>
            </div>

            <div class="col-span-1">
                <div>
                    <x-label for="name_hotel" :value="__('Nombre del Hotel')" />
                    <x-input id="name_hotel" class="block mt-1 w-full" type="text" name="name_hotel"
                        wire:model="name_hotel" required autofocus autocomplete="name" />
                </div>

                <div>
                    <x-label for="slogan" :value="__('Slogan principal')" />
                    <x-input id="slogan" class="block mt-1 w-full" type="text" name="slogan" wire:model="slogan"
                        required autofocus autocomplete="slogan" />
                </div>

                <div>
                    <x-label for="final_slogan" :value="__('Slogan final')" />
                    <x-input id="final_slogan" class="block mt-1 w-full" type="text" name="final_slogan"
                        wire:model="final_slogan" required autofocus autocomplete="final_slogan" />
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center mt-4">
            <x-button wire:click="submitForm" class="ms-4">
                {{ __('Registrar') }}
            </x-button>
        </div>
    </x-register-hotel-card>
</div>
