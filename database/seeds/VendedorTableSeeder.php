<?php

use App\Vendedor;
use Illuminate\Database\Seeder;

class VendedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vendedor::create([
            'nombre' => 'Vendedor AAA'
        ]);
        Vendedor::create([
            'nombre' => 'Vendedor BBB'
        ]);
        Vendedor::create([
            'nombre' => 'Vendedor CCC'
        ]);
        Vendedor::create([
            'nombre' => 'Vendedor DDD'
        ]);
    }
}
