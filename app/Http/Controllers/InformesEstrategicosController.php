<?php

namespace App\Http\Controllers;

use App\Venta;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InformesEstrategicosController extends Controller
{
    public function informe1_parametros()
    {
        return view('informes.estrategicos.informe_1_parametros');
    }


    public function informe1(Request $request)
    {
        // Se toman las fechas puestas en la pantalla de parametros
        $fecha_inicio = $request->input('fecha_inicio');
        $fecha_final = $request->input('fecha_fin');
        // Se buscan las ventas entre esas fechas
        $ventas = Venta::whereBetween('fecha',[$fecha_inicio,$fecha_final])->where('estado_venta_id','=','1')->get();
        // Cuando se obtienen las cuentas

        return view('informes.estrategicos.informe_1',[
            'fecha_inicio' => $fecha_inicio,
            'fecha_final' => $fecha_final,
            'ventas' => $ventas,
        ]);
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
