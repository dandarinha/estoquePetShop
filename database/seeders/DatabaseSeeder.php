<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CategoriaSeeder::class,
            MercadoriaSeeder::class,
            MovimentacaoSeeder::class,
            UserSeeder::class,
        ]);
    }
}
