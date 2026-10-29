<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    public function run(): void
    {
        $categorias = [
            'Ração',
            'Medicamentos',
            'Brinquedos',
            'Higiene',
            'Acessórios',
        ];

        foreach ($categorias as $categoria) {
            Categoria::firstOrCreate([
                'categoria' => $categoria,
            ]);
        }
    }
}
