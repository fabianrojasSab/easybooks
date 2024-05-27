
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-3 bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-card tittle="Libros" description="Realizar el registro de libros">
                <x-button class="ms-4" href="{{ route('libros')}}" wire:navigate>
                    {{ __('Ir') }}
                </x-button>
            </x-card>
            <x-card tittle="Categorias" description="Realizar el registro de categorias">
                <x-button class="ms-4" href="{{ route('categorias')}}" wire:navigate>
                    {{ __('Ir') }}
                </x-button>
            </x-card>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('js/main.js')}}"></script>


