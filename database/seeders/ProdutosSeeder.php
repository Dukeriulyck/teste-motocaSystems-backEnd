<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    public function run(): void
    {
        /**
         * Criando o produto para o teste.
         */
        DB::table('produtos')->insert([
            'nome' => 'Produto 1',
            'descricao' => 'Descrição do produto 1',
            'preco' => 105.87,
            'categoria_id' => 2
        ]);
    }
}
