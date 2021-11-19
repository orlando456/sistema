<?php

namespace App\Http\Controllers;

use App\Models\producto; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function index()
    {
        $producto = producto::all();

        

       return view('admin.reporte.index', compact('producto'));
    }
}
