<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Categoria;
use App\Models\Libro;

class RegistrarLibros extends Component
{
    public $titulo;
    public $autor;
    public $editorial;
    public $edicion;
    public $anio;
    public $isbn;
    public $idioma;
    public $descripcion;
    public $ubicacion;
    public $estado;
    public $categoria_id;

    public function save(){
        //Validar los datos del formulario
        $validated = $this->validate([
            'titulo' => 'required|string|min:5|max:255',
            'autor' => 'required|string|min:5|max:255',
            'editorial' => 'required|string|min:5|max:255',
            'edicion' => 'required|string|min:5|max:255',
            'anio' => 'required|string|min:5|max:255',
            'isbn' => 'required|string|min:5|max:255',
            'idioma' => 'required|string|min:5|max:255',
            'descripcion' => 'required|string|min:5|max:255',
            'ubicacion' => 'required|string|min:5|max:255',
            'estado' => 'required|string|min:1|max:1',
            'categoria_id' => 'required|integer'
        ]); //SE COMENTA PERO VALIDAR COMO SE HACEN ESTAS VALIDACIONES DESDE EL CONTROLADOR

        // Crear un nuevo estudiante usando el método `create` del modelo
        Libro::create([
            'titulo' => $this->titulo,
            'autor' => $this->autor,
            'editorial' => $this->editorial,
            'edicion' => $this->edicion,
            'anio' => $this->anio,
            'isbn' => $this->isbn,
            'idioma' => $this->idioma,
            'portada' => 'portada',
            'descripcion' => $this->descripcion,
            'ubicacion' => $this->ubicacion,
            'estado' => $this->estado,
            'categoria_id' => $this->categoria_id
        ]);

        // Redireccionar a la vista de listado de estudiantes
        return redirect()->to('xr')
            ->with('status', 'Post created!');
    }


    public function render()
    {
        //consulta las categorias para devolverlas a la vista
        $this->categorias = Categoria::all();

        //devuelve la vista con las categorias
        return view('livewire.libros.registrar-libros', [
            'categorias' => $this->categorias
        ]);
    }
}
