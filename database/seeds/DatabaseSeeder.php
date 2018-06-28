<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriasTableSeeder::class);
        $this->call(UnidadMedidaTableSeeder::class);
        $this->call(TipoProductoTableSeeder::class);
        $this->call(TipoDocumentoTableSeeder::class);
        $this->call(EstadoVentaTableSeeder::class);
        $this->call(VendedorTableSeeder::class);
    }
}
