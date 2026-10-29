<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mercadoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'mercadoria',
        'descricao',
        'marca',
        'categoria_id',
        'preco_custo',
        'preco_venda',
        'qtd_disponivel',
        'min_estoque',
        'validade'
    ];
}
