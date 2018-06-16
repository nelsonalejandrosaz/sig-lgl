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

    public function informe3_parametros()
    {
        return view('informes.estrategicos.informe_3_parametros');
    }

    public function informe3()
    {
        return view('informes.estrategicos.informe_3');
    }

    public function informe4_parametros()
    {
        return view('informes.estrategicos.informe_4_parametros');
    }

    public function informe4()
    {
        return view('informes.estrategicos.informe_4');
    }

    public function informe5_parametros()
    {
        return view('informes.estrategicos.informe_5_parametros');
    }

    public function informe5()
    {
        return view('informes.estrategicos.informe_5');
    }
}
