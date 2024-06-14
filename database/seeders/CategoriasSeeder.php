<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    public function run(): void
    {
        /**
         * Criando duas categorias. Uma será deletada no teste (Categoria 1), e outra permanecerá
         * para permitir o produto ser cadastrado (Categoria 2)
         */
        DB::table('categorias')->insert([
            'nome' => 'Categoria 1',
            'created_at' => now(),
            'updated_at'=> now(),
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Categoria 2',
            'created_at' => now(),
            'updated_at'=> now(),
        ]);        
    }
}
