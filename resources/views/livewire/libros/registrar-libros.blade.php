<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Libros') }}
    </h2>
</x-slot>

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    <!-- component -->
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">


    <section class=" py-1 bg-blueGray-50">
        <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-blueGray-700">Registro de libros</h3>
                        </div>
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                            <button  href="{{ route('libros') }}" wire:navigate
                                class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button">Volver</button>
                        </div>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <form  wire:submit="save">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Libro Information
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <x-label for="grid-password" :value="__('Titulo')" />
                                    <x-input id="nombre_libro" class="block mt-1 w-full" type="text" wire:model="titulo" name="nombre_libro" required autofocus />
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <x-label for="grid-password" :value="__('Autor')" />
                                    <x-input id="autor" class="block mt-1 w-full" type="text" wire:model="autor" name="autor" required />
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <div class="relative w-full mb-3">
                                        <x-label for="grid-password" :value="__('Editorial')" />
                                        <x-input id="editorial" class="block mt-1 w-full" type="text" wire:model="editorial" name="editorial" required />
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <div class="relative w-full mb-3">
                                        <x-label for="grid-password" :value="__('Edicion')" />
                                        <x-input id="edicion" class="block mt-1 w-full" type="text" wire:model="edicion" name="edicion" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300">

                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Mas Information
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <x-label for="grid-password" :value="__('Año')" />
                                    <x-input id="anio" class="block mt-1 w-full" type="text" wire:model="anio" name="anio" required />
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <x-label for="grid-password" :value="__('Numero estandard del libro')" />
                                    <x-input id="isbn" class="block mt-1 w-full" type="text"  wire:model="isbn" name="isbn" required />
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <x-label for="grid-password" :value="__('Idioma')" />
                                    <x-input id="idioma" class="block mt-1 w-full" type="text" wire:model="idioma" name="idioma" required />
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <x-label for="grid-password" :value="__('Descripcion')" />
                                    <x-input id="descripcion" class="block mt-1 w-full" type="text" wire:model="descripcion" name="descripcion" required />
                                </div>
                            </div>
                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300">

                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Informacion adicional
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <x-label for="grid-password" :value="__('Ubicacion')" />
                                    <x-input id="ubicacion" class="block mt-1 w-full" type="text" wire:model="ubicacion" name="ubicacion" required />
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <x-label for="grid-password" :value="__('Estado')" />
                                    <x-input id="estado" class="block mt-1 w-full" type="text" wire:model="estado" name="estado" required />
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <x-label for="grid-password" :value="__('Categoria')" />
                                    <select id="categoria" class="block mt-1 w-full" name="categoria" wire:model="categoria_id" required>
                                        <option value="">Seleccione una opcion</option>
                                        @if ($categorias->count() > 0)
                                            @foreach ($categorias as $categoria)
                                                <option value="{{ $categoria->id }}">{{ $categoria->descripcion }}</option>
                                            @endforeach
                                        @else
                                            <option value="">No hay categorias</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button
                            class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                            type="submit">
                            Registrar
                        </button>
                        <span wire:loading>Saving...</span> 
                    </form>
                </div>
            </div>
            <footer class="relative  pt-8 pb-6 mt-2">
                <div class="text-center flex justify-between">

                </div>
            </footer>
        </div>
    </section>

</div>
