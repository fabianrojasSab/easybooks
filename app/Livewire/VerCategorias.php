<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Categoria;

#[lazy]
class VerCategorias extends Component
{

    public $categorias;
    public $IdCategoria;

    public function mount()
    {
        // Slow database query...
        $this->categorias = Categoria::all();
    }

    //funcion encargada de eliminar una categoria
    public function delete($id)
    {

        
        // $Categoria = Categoria::findOrFail($id);
        // $Categoria->delete();
        //return view('livewire.categorias.ver-categorias', compact('categorias'));

        try {
            Categoria::where('id',$id)->delete();
            return $this->redirect('/yv',navigate:true); 
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
        $categorias = $this->categorias;
        return view('livewire.categorias.ver-categorias', compact('categorias'));
    }
}
