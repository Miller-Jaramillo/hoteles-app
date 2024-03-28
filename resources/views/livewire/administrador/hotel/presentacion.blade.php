<x-form-section submit="updatePersonaliza">
    <x-slot name="title">
        {{ __('Tarjeta de presentación') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Aqui agrega las mejores imagenes que muestren lo hermoso que es tu hotel y describelo') }}
    </x-slot>


    <x-slot name="form">

        <div class="col-span-6 sm:col-span-4">





            <div>




                    <div class="mt-2">
                        <x-label for="description"
                            class="text-xs font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase">
                            Descripcion</x-label>
                        <p
                            class=" block text-sm font-medium leading-6 text-gray-400 dark:text-gray-700 tracking-widest">
                            Describe tu hotel</p>

                        <div class="relative">
                            <textarea wire:model="description" id="description" name="description"
                                class="resize-none block w-full rounded-md border-0 py-1.5 dark:bg-gray-900
                                                         shadow-sm ring-1 ring-inset ring-indigo-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600
                                                         text-sm font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest
                                                               h-10 // Altura inicial
                                                               transition // Agrega transición para una expansión suave
                                                               ease-in-out // Tipo de transición
                                                               focus:h-32 // Altura al enfocar el textarea"></textarea>
                        </div>

                    </div>


                    <div class="mt-5 grid grid-cols-1 sm:grid-cols-1">
                        <div class="mt-4 ">
                            <x-label for="cover-photo"
                                class="text-xs font-semibold leading-6 dark:text-gray-100 text-gray-900 tracking-widest uppercase">
                                Fotos</x-label>

                            @if ($previews)
                                <div>
                                    @foreach ($previews as $preview)
                                        <div
                                            class="mt-2 flex justify-center sm:rounded-lg rounded-md dark:bg-gray-900
                                                                                border border-dashed border-indigo-900/25 dark:border-indigo-100/25 px-6 py-10">
                                            <div class="text-center">
                                                @if ($preview['type'] === 'image')
                                                    <img src="{{ $preview['url'] }}" alt="Preview"
                                                        class="h-128 w-128 sm:rounded-lg rounded-md border-2 border-indigo-100">
                                                @elseif ($preview['type'] === 'video')
                                                    <video controls src="{{ $preview['url'] }}"
                                                        class="h-128 w-128 sm:rounded-lg rounded-md border-2 border-indigo-100"></video>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                            <div class="mt-2">
                                <input type="file" id="file" wire:model="files" accept="image/*,video/*"
                                    multiple class="mt-1">
                            </div>
                        </div>
                    </div>


                    <div class="mt-4 flex justify-end">
                        <button wire:click="closeForm" type="button"
                            class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50">
                            Cancelar
                        </button>
                        <button type="submit">Guardar</button>
                    </div>
                </form>


                <div>
                    @if ($message)
                        <div x-data="{ show: @entangle('message') }" x-show="show" x-init="setTimeout(() => { show = false; }, 3000)"
                            class="fixed inset-0 flex items-center justify-center">
                            <div class="bg-white dark:bg-gray-200 text-gray-700 py-2 px-4 rounded-lg text-center">
                                {!! $message !!}
                            </div>
                        </div>
                    @endif
                </div>
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
