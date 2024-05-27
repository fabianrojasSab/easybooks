<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Libros;
use App\Livewire\Home;
use App\Livewire\Categorias;
use App\Livewire\VerCategorias;
use App\Livewire\RegistrarCategorias;
use App\Livewire\VerLibros;
use App\Livewire\RegistrarLibros;

//se define nomenclatura de la ruta y se llama al controlador
//x para la ruta de libros
//y para la ruta de categorias
//v para las rutas que muestran informacion
//r para las rutas de registro
//s para las rutas de sesion
//z para las rutas de eliminacion
//w para las rutas de edicion
//m para las rutas de modificacion
//c para las rutas de creacion
//l para las rutas de listado
//b para las rutas de busqueda
//a para las rutas de asignacion
//d para las rutas de desasignacion
//i para las rutas de importacion
//e para las rutas de exportacion
//t para las rutas de reportes
//n para las rutas de notificaciones
//o para las rutas de ordenamiento
//p para las rutas de paginacion
//q para las rutas de busqueda avanzada
//f para las rutas de filtros
//g para las rutas de agrupacion
//h para las rutas de historial
//j para las rutas de auditoria
//k para las rutas de configuracion
//u para las rutas de usuarios

Route::get('/', function () {
    return view('/auth/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', Home::class)->name('dashboard');

    //ruta para el controller libros
    Route::get('x', Libros::class)->name('libros');;

    Route::get('xr', RegistrarLibros::class)->name('registrarlibros');

    Route::get('xv', VerLibros::class)->lazy()->name('verlibros');

    //ruta para las categorias
    Route::get('y', Categorias::class)->name('categorias');

    Route::get('yr', RegistrarCategorias::class)->name('registrarcategorias');

    Route::get('yv', VerCategorias::class)->lazy()->name('vercategorias');

    Route::get('yz', [VerCategorias::class, 'destroy'])->name('eliminarcategoria');

    Route::get('logout', function () {
        Auth::logout();
        return redirect('/');
    })->name('logout');
});
