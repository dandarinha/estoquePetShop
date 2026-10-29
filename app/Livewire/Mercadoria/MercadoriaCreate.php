<?php

namespace App\Livewire\Mercadoria;

use App\Models\Mercadoria;
use Livewire\Component;

class MercadoriaCreate extends Component
{
    public $mercadoria;
    public $descricao;
    public $marca;
    public $categoria_id;
    public $preco_custo;
    public $preco_venda;
    public $qtd_disponivel;
    public $min_estoque;
    public $validade;

    public function create()
    {
        Mercadoria::create([
        'mercadoria' => $this -> mercadoria,
        'descricao'  => $this -> descricao,
        'marca'  => $this -> marca,
        'categoria_id'  => $this -> categoria_id,
        'preco_custo'  => $this -> preco_custo,
        'preco_venda'  => $this -> preco_venda,
        'qtd_disponivel'  => $this -> qtd_disponivel,
        'min_estoque'  => $this -> min_estoque,
        'validade'  => $this -> validade
        ]);

        session()->flash('success', 'cadastrado com sucesso');
    }


    public function render()
    {
        return view('livewire.mercadoria.mercadoria-create');
    }
}
