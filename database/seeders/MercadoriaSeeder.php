<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mercadoria;
use App\Models\Categoria;

class MercadoriaSeeder extends Seeder
{
    public function run(): void
    {
        $categorias = Categoria::all()->keyBy('categoria');

        $mercadorias = [
            [
                'mercadoria' => 'Ração para cães',
                'descricao' => 'Ração para cães adultos',
                'marca' => 'Marca A',
                'categoria' => 'Ração',
                'preco_custo' => 50.00,
                'preco_venda' => 75.00,
                'qtd_disponivel' => 30,
                'min_estoque' => 5,
                'validade' => '2027-12-31',
            ],
            [
                'mercadoria' => 'Shampoo para pets',
                'descricao' => 'Shampoo para cães e gatos',
                'marca' => 'Marca B',
                'categoria' => 'Higiene',
                'preco_custo' => 15.00,
                'preco_venda' => 25.00,
                'qtd_disponivel' => 20,
                'min_estoque' => 4,
                'validade' => '2027-06-30',
            ],
            [
                'mercadoria' => 'Brinquedo para cães',
                'descricao' => 'Brinquedo resistente para cães',
                'marca' => 'Marca C',
                'categoria' => 'Brinquedos',
                'preco_custo' => 10.00,
                'preco_venda' => 18.00,
                'qtd_disponivel' => 15,
                'min_estoque' => 3,
                'validade' => '2028-12-31',
            ],
        ];

        foreach ($mercadorias as $dados) {
            $categoria = $categorias->get($dados['categoria']);

            if (!$categoria) {
                continue;
            }

            unset($dados['categoria']);

            Mercadoria::firstOrCreate(
                [
                    'mercadoria' => $dados['mercadoria'],
                    'marca' => $dados['marca'],
                ],
                array_merge($dados, [
                    'categoria_id' => $categoria->id,
                ])
            );
        }
    }
}
