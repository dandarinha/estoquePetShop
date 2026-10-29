<?php

namespace App\Livewire\Categoria;

use Livewire\Component;

class CategoriaCreate extends Component
{
    public $mercadoria_id;
    public $categoria;

    public function render()
    {
        return view('livewire.categoria.categoria-create');
    }
}
