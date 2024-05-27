<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Categoria;

class RegistrarCategorias extends Component
{

    public $descripcion;

    public function save()
    {
        //Validar los datos del formulario
        $validated = $this->validate([
            'descripcion' => 'required|string|min:5|max:255'
        ]); //SE COMENTA PERO VALIDAR COMO SE HACEN ESTAS VALIDACIONES DESDE EL CONTROLADOR

         // Crear un nuevo estudiante usando el método `create` del modelo
        Categoria::create([
            'descripcion' => $this->descripcion,
            'estado' => 'A',
        ]);

        // Redireccionar a la vista de listado de estudiantes
        return redirect()->to('yr')
            ->with('status', 'Post created!');
    }

    public function render()
    {
        return view('livewire.categorias.registrar-categorias');
    }
}
