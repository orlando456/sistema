<?php

namespace App\Http\Controllers;

use App\Models\inventario; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function index(Request $request)
    {
        $inventario = DB::table('inventario')
        ->join('users','inventario.id','=','users.id')
        ->join('producto','inventario.producto_id','=','producto.producto_id')
        ->select('inventario.inventario_id','users.name','producto.nombre','inventario.cantidad_entrada','inventario.cantidad_salida','inventario.precio_unitario','inventario.stock','inventario.total')
        ->get();
        return view('admin.inventario.index',['inventario'=> $inventario]);
    }

    public function create()
    {
        $producto = DB::table('producto')->get();
        $users = DB::table('users')->get();
        return view('admin.inventario.create',['producto' => $producto, 'users' => $users]);
    }

    public function store(Request $request)
    {
        $inventario = new inventario();
        $inventario->id = $request->id;
        $inventario->producto_id = $request->producto_id;
        $inventario->cantidad_entrada = $request->cantidad_entrada;
        $inventario->cantidad_salida = $request->cantidad_salida;
        $inventario->precio_unitario = $request->precio_unitario;
        $inventario->stock = $request->stock;
        $inventario->total = $request->total;

        $inventario->save();

        return redirect()->route('admin.inventario.index', $inventario);
    }

    public function destroy(inventario $inventario)
    {
        $inventario->delete();
        return view('admin.inventario.index');
    }


}
