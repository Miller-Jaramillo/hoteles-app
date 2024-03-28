<x-app-layout>

    <x-slot name="header">
        @include('components.header')
    </x-slot>


    <div
        class=" bg-gradient-to-br from-blue-50 via-white to-gray-100 dark:from-zinc-950 dark:via-blue-950  dark:to-zinc-950">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- --> separador --}}
            <div class="mx-auto max-w-6xl border-b border-yellow-500 dark:border-gray-300 my-3"></div>

            {{-- --> Slogan principal --}}

            <div class="flex justify-center">
                @if ($hotels->isEmpty())
                    <label
                        class="flex justify-center mx-auto max-w-6xl pb-3  py-2 px-2 text-2xl uppercase font-bold dark:font-bold text-gray-900 dark:text-gray-200">
                        Bienvenido Craftyniano 👽
                    </label>
                @else
                    @foreach ($hotels as $hotel)
                        @if ($hotel->slogan == null)
                            <label
                                class="flex justify-center mx-auto max-w-6xl pb-3  py-2 px-2 text-2xl uppercase font-bold dark:font-bold text-gray-900 dark:text-gray-200">
                                Bienvenido Craftyniano 👽
                            </label>
                        @else
                            <label
                                class="flex justify-center mx-auto max-w-6xl pb-3  py-2 px-2 text-2xl uppercase font-bold dark:font-bold text-gray-900 dark:text-gray-200">
                                {{ $hotel->slogan }}
                            </label>
                        @endif
                    @endforeach
                @endif
            </div>

            <div>


                {{-- @livewire('public.about-us-component') --}}

            </div>
            <div>
                <x-label
                    class="  mx-auto max-w-6xl  mt-10 py-2 px-2 text-md uppercase font-bold dark:font-bold text-gray-900 dark:text-gray-200">
                    Nuestros servicios😅</x-label>

                {{-- @livewire('public.services-us-component') --}}
            </div>

            <div>
                <x-label
                    class="  mx-auto max-w-6xl  mt-10 py-2 px-2 text-md uppercase font-bold dark:font-bold text-gray-900 dark:text-gray-200">
                    Habitaciones🛏️ </x-label>

                {{-- @livewire('inf-reservas-component') --}}
            </div>


            {{-- --> slogan final --}}

            <div class="mt-5 flex justify-center">
                @if ($hotels->isEmpty())
                    <label
                        class="flex justify-center mx-auto max-w-6xl pb-3  py-2 px-2 text-xl uppercase font-bold dark:font-bold text-gray-900 dark:text-gray-200">
                        Hasta pronto Craftyniano 👋
                    </label>
                @else
                    @foreach ($hotels as $hotel)
                        @if ($hotel->final_slogan == null)
                            <label
                                class="flex justify-center mx-auto max-w-6xl pb-3  py-2 px-2 text-xl uppercase font-bold dark:font-bold text-gray-900 dark:text-gray-200">
                                Hasta pronto Craftyniano 👋
                            </label>
                        @else
                            <label
                                class="flex justify-center mx-auto max-w-6xl pb-3  py-2 px-2 text-2xl uppercase font-bold dark:font-bold text-gray-900 dark:text-gray-200">
                                {{ $hotel->final_slogan }}
                            </label>
                        @endif
                    @endforeach
                @endif
            </div>


            {{-- @include('footer') --}}
        </div>
    </div>



</x-app-layout>
