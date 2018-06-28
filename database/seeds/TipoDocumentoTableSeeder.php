<?php

use App\TipoDocumento;
use Illuminate\Database\Seeder;

class TipoDocumentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoDocumento::create([
            'codigo' => 'FAC',
            'nombre' => 'Factura',
        ]);
        TipoDocumento::create([
            'codigo' => 'CCF',
            'nombre' => 'Comprobante de Credito Fiscal',
        ]);
    }
}
