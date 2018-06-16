<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackupController extends Controller
{
    public function importShow()
    {
        return view('backup.ImportShow');
    }

    public function exportShow()
    {
        return view('backup.exportShow');
    }
}
