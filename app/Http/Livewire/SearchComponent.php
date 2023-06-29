<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class SearchComponent extends Component
{
    //muestra la lista de sugerencias de la busqueda
    public $showlist = false;
    //dato a buscar
    public $search = "";
    //Almacena los datos para sugerencia
    public $results;
    //Almacena los datos a los que se hicieron click
    public $product;

    //Obtener registros en la busqueda
    public function searchProduct(){

        if(!empty($this->search)){

            $this->results = Product::orderby('name', 'asc')
                ->select('*')
                ->where('name', 'like', '%' . $this->search . '%')
                ->get();

            $this->showlist = true;    
        }else{
            $this->showlist = false;
        }
    }

    //Obtener registro seleccionado por su id
    public function getProduct($id = 0){

        $result = Product::select('*')
            ->where('id', $id)
            ->first();

        $this->search = $result->name;
        $this->product = $result;
        $this->showlist = false;    
    }

    public function render()
    {
        return view('livewire.search-component');
    }
}
