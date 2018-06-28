<?php

use App\UnidadMedida;
use Illuminate\Database\Seeder;

class UnidadMedidaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UnidadMedida::create(['nombre' => 'Libras', 'codigo' => 'Lb']);
        UnidadMedida::create(['nombre' => 'Kilogramos', 'codigo' => 'Kg']);
        UnidadMedida::create(['nombre' => 'Gramos', 'codigo' => 'gr']);
        UnidadMedida::create(['nombre' => 'Galón', 'codigo' => 'Gl']);
        UnidadMedida::create(['nombre' => 'Litro', 'codigo' => 'Lt']);
        UnidadMedida::create(['nombre' => 'Metros cúbicos', 'codigo' => 'm3']);
        UnidadMedida::create(['nombre' => 'Unidad', 'codigo' => 'Und']);
        UnidadMedida::create(['nombre' => 'Cubeta 1', 'codigo' => 'Cub1']);
        UnidadMedida::create(['nombre' => 'Cubeta 2', 'codigo' => 'Cub2']);
        UnidadMedida::create(['nombre' => 'Otros', 'codigo' => 'otro']);
    }
}
