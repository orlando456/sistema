<?php

namespace App\Http\Controllers;
use app\Models\compra;
use app\Models\usuario;
use app\Models\producto;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CompraController extends Controller
{
    public function index(Request $request)
    {
        $compra = DB::table('compra')
        ->join('usuario','compra.usuario_id','=','usuario.usuario_id')
        ->join('producto','compra.producto_id','=','producto.producto_id')
        ->select('compra.compras_id','usuario.nombre','producto.nombre as nombr','compra.precio','compra.cantidad','compra.total')
        ->get();
        return view('admin.compra.index',['compra' => $compra]);
    }

    public function create()
    {
        return view('admin.compra.create');
    }

    public function store(Request $request)
    {
        $compra = new compra();
        $compra->nombre = $request->nombre;
        $compra->nombr = $request->nombr;
        $compra->precio = $request->precio;
        $compra->cantidad = $request->cantidad;
        $compra->total = $request->total;

        $compra->save();

        return redirect()->route('admin.producto.store', $compra);
    }
}
