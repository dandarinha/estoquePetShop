<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mercadoria;
use App\Models\Movimentacao;

class MovimentacaoSeeder extends Seeder
{
    public function run(): void
    {
        $mercadoria = Mercadoria::first();

        if (!$mercadoria) {
            return;
        }

        Movimentacao::firstOrCreate(
            [
                'mercadoria_id' => $mercadoria->id,
                'operacao' => 'entrada',
                'quantidade' => 20,
                'responsavel' => 'Administrador',
            ],
            [
                'data' => now(),
            ]
        );

        Movimentacao::firstOrCreate(
            [
                'mercadoria_id' => $mercadoria->id,
                'operacao' => 'saida',
                'quantidade' => 5,
                'responsavel' => 'Administrador',
            ],
            [
                'data' => now(),
            ]
        );
    }
}
