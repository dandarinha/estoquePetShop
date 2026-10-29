<?php

namespace App\Livewire\Movimentacao;

use App\Models\Movimentacao;
use Livewire\Component;

class MovimentacaoCreate extends Component
{
    public $mercadoria_id;
    public $operacao;
    public $quantidade;
    public $data;
    public $responsavel;

    public function create()
    {
        Movimentacao::create([
        'mercadoria_id' => $this -> mercadoria_id,
        'operacao' => $this -> operacao,
        'quantidade' => $this -> quantidade,
        'data' => $this -> data,
        'responsavel' => $this -> responsavel
        ]);

        session()->flash('success', 'cadastrado com sucesso');
    }


    public function render()
    {
        return view('livewire.movimentacao.movimentacao-create');
    }
}
