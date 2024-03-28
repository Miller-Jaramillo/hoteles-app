<x-form-section submit="updateRedes">
    <x-slot name="title">
        {{ __('Redes sociales') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Agrega tus redes sociales y conecta con tus huespedes.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="whatsapp" value="{{ __('WhatsApp') }}" />
            <x-input id="whatsapp" type="text" class="mt-1 block w-full" wire:model="whatsapp"
                autocomplete="current-password" />
            <x-input-error for="whatsapp" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="facebook" value="{{ __('Facebook') }}" />
            <x-input id="facebook" type="text" class="mt-1 block w-full" wire:model="facebook"
                autocomplete="new-facebook" />
            <x-input-error for="facebook" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="Instagram" value="{{ __('Instagram') }}" />
            <x-input id="Instagram" type="text" class="mt-1 block w-full" wire:model="Instagram"
                autocomplete="new-password" />
            <x-input-error for="Instagram" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="tiktok" value="{{ __('TikTok') }}" />
            <x-input id="tiktok" type="text" class="mt-1 block w-full" wire:model="tiktok"
                autocomplete="new-password" />
            <x-input-error for="tiktok" class="mt-2" />
        </div>



        <div class="col-span-6 sm:col-span-4">

            <x-label class="pb-5" for="">
                Verifica que tus redes esten correctamente haciendo click en el icono correspondiente. Debe
                redireccionarte a tu red social.
            </x-label>

            <div class="flex mt-5 sm:justify-center sm:mt-0">
                <a href="{{ Auth::user()->facebook }}" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">

                    <!-- Facebook -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" style="color: #1877f2"
                        viewBox="0 0 24 24">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                    </svg>
                    <span class="sr-only">Facebook page</span>
                </a>
                <a href="{{ Auth::user()->instagram }}" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <!-- Instagram -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" style="color: #c13584"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                    </svg>

                    <span class="sr-only">Instagram</span>
                </a>
                <a href="https://wa.me/57{{ Auth::user()->whatsapp }}/?text=Hola%20quiero%20hacer%20una%20reserva" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <!-- Whatsapp -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" style="color: #128c7e"
                        viewBox="0 0 24 24">
                        <path
                            d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                    </svg>
                    <span class="sr-only">WhatsApp</span>
                </a>
                <a href="{{ Auth::user()->tiktok }}" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <!-- TikTok -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-7 w-7"
                        style="color: #6a76ac">
                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path fill="currentColor"
                            d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
                    </svg>
                    <span class="sr-only">Tiktok</span>
                </a>
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
