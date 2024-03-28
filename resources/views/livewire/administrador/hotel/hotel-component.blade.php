<div>
    <x-slot name="header">
        @include('components.header')
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">


            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('administrador.hotel.personaliza')

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
            @livewire('administrador.hotel.presentacion')

            <x-section-border />
        @endif


            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('administrador.hotel.datos-adicionales')

                <x-section-border />
            @endif



            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('administrador.hotel.redes-hotel')

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @endif

            {{-- @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-section-border />
            @endif --}}

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</div>
