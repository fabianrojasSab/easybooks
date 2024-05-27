<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Libros') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-3 bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-card tittle="Registrar libros" description="Realizar el registro de libros">
                <x-button class="ms-4" href="{{ route('registrarlibros')}}" wire:navigate>
                    {{ __('Registrar') }}
                </x-button>
            </x-card>
            <x-card tittle="Ver libros" description="Visualizar registro total de los libros">
                <x-button class="ms-4" href="{{ route('verlibros')}}" wire:navigate>
                    {{ __('ver') }}
                </x-button>
            </x-card>
        </div>
    </div>
</div>