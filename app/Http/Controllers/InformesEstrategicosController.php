<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformesEstrategicosController extends Controller
{
    public function informe1_parametros()
    {
        return view('informes.estrategicos.informe_1_parametros');
    }

    public function informe1()
    {
        return view('informes.estrategicos.informe_1');
    }

    public function informe2_parametros()
    {
        return view('informes.estrategicos.informe_2_parametros');
    }

    public function informe2(Request $request)
    {
        return view('informes.estrategicos.informe_2');
    }
}
