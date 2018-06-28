<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Categoria::create([
                'codigo' => 'CAT ' . $i,
                'nombre' => 'Categoria ' . $i,
            ]);
        }
    }
}
