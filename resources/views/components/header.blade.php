<div class="flex justify-center">
    {{-- --> logo --}}

    <div class="mx-auto max-w-7xl px-1 mt-2 ">
        <div class="flex justify-center items-center text-xl">
            {{-- !! logo --}}
            @if ($hotels->isEmpty())
                <img src="img/ligth2.png" class="dark:hidden h-20 w-36 rounded-full object-cover">
                <img src="img/crafty-dark-1.png" class="hidden dark:block h-20 w-36 rounded-full object-cover">
            @else
                @foreach ($hotels as $hotel)
                    @if ($hotel->photo_profile == null)
                        <img src="img/ligth2.png" class="dark:hidden h-20 w-36 rounded-full object-cover">
                        <img src="img/crafty-dark-1.png" class="hidden dark:block h-20 w-36 rounded-full object-cover">
                    @else
                        <div class="flex justify-center">
                            <img src="{{ asset('storage/' . $hotel->photo_profile) }}"
                                class="dark:hidden h-20 w-20 rounded-full object-cover">
                            <img src="{{ asset('storage/' . $hotel->photo_profile) }}"
                                class="hidden dark:block h-20 w-20 rounded-full object-cover">
                        </div>
                    @endif
                @endforeach
            @endif

            {{-- !! Nombre hotel - Titulo --}}

            @if ($hotels->isEmpty())
                <label class="ml-3 text-2xl font-bold uppercase tracking-wide text-gray-900 dark:text-gray-100">
                    Crafty.co 👽
                </label>
            @else
                @foreach ($hotels as $hotel)
                    <label class="ml-3 text-2xl font-bold uppercase tracking-wide text-gray-900 dark:text-gray-100">
                        {{ $hotel->name }}
                    </label>
                @endforeach
            @endif
        </div>
    </div>






</div>
