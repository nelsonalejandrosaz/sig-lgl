<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'administrador',
            'email' => 'administrador@lgl.com',
            'password' => bcrypt('qwerty-0106'),
            'rol_id' => 1,
        ]);
        User::create([
            'name' => 'estrategico',
            'email' => 'estrategico@lgl.com',
            'password' => bcrypt('qwerty-0106'),
            'rol_id' => 2,
        ]);
        User::create([
            'name' => 'tactico',
            'email' => 'tactico@lgl.com',
            'password' => bcrypt('qwerty-0106'),
            'rol_id' => 3,
        ]);
    }
}
