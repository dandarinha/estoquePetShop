<?php

namespace App\Livewire\Mercadoria;

use App\Models\Mercadoria;
use Livewire\Component;

class MercadoriaIndex extends Component
{
    public function render()
    {
        $mercadorias = Mercadoria::all();
        return view('livewire.mercadoria.mercadoria-index', compact('mercadorias'));
    }
}
