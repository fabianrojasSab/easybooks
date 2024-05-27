<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Libro;

#[lazy]
class VerLibros extends Component
{
    public $libros;

    public function mount()
    {
        // Slow database query...
        $this->libros = Libro::all();
    }

    //funcion encargada de eliminar un libro
    public function delete($id)
    {
        try {
            Libro::where('id',$id)->delete();
            return $this->redirect('/xv',navigate:true); 
        } catch (\Exception $th) {
            dd($th);
        }
    }
    
    public function placeholder()
    {
        return view('livewire.placeholders.skeleton');
    }

    public function render()
    {
        $libros = $this->libros;
        return view('livewire.libros.ver-libros', compact('libros'));
    }
}
