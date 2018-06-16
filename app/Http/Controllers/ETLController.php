<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ETLController extends Controller
{
    public function show()
    {
        return view('etl.show');
    }
}
