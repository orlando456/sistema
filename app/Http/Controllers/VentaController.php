<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\cliente;
use App\Models\ventas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class VentaController extends Controller
{
    public function index(Request $request)
    {
        $ventas = DB::table('ventas')
        ->join('users','ventas.id','=','users.id')
        ->join('cliente','ventas.id_cliente','=','cliente.id_cliente')
        ->select('ventas.ventas_id','users.name','cliente.nombre','ventas.num_comprobante','ventas.total','ventas.cambio')
        ->get();
        return view('admin.ventas.index',['ventas' => $ventas]);
    }
    public function create()
    {
        $users = DB::table('users')->get();
        $cliente = DB::table('cliente')->get();
        return view('admin.ventas.create',['users' => $users, 'cliente' => $cliente]);
    }

    public function store(Request $request)
    {
        $ventas = new ventas();
        $ventas->id = $request->id;
        $ventas->id_cliente = $request->id_cliente;
        $ventas->num_comprobante = $request->num_comprobante;
        $ventas->total = $request->total;
        $ventas->cambio = $request->cambio;
        
        $ventas->save();

        return redirect()->route('admin.ventas.index', $ventas);
    }
}   
