<div wire:poll>
    @livewireScripts
    @stack('scripts')
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewire('home-component')
</div>
