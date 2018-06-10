<?php

use App\Rol;
use Illuminate\Database\Seeder;

class RolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
            'codigo' => 'ADMIN',
            'nombre' => 'Administrador',
        ]);
        Rol::create([
            'codigo' => 'ESTRA',
            'nombre' => 'Estratégico',
        ]);
        Rol::create([
            'codigo' => 'TACTI',
            'nombre' => 'Táctico',
        ]);
    }
}
