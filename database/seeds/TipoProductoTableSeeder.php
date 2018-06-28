<?php

use App\TipoProducto;
use Illuminate\Database\Seeder;

class TipoProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            TipoProducto::create([
                'codigo' => 'TP ' . $i,
                'nombre' => 'Tipo producto ' . $i,
            ]);
        }
    }
}
