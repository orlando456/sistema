<?php

namespace App\Http\Controllers;

use App\Models\inventario; 
use PDF;
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
        ->join('compra','inventario.compras_id','=','compra.compras_id')
        ->join('ventas','inventario.ventas_id','=','ventas.ventas_id')
        ->select('inventario.inventario_id','users.name','producto.nombre','producto.precio_venta','compra.precio_unitario','compra.cantidad','ventas.cantidad as cantidadven')
        ->get();
        return view('admin.inventario.index',['inventario'=> $inventario]);
    }

    public function create()
    {
        $producto = DB::table('producto')->get();
        $users = DB::table('users')->get();
        $compra = DB::table('compra')->get();
        $ventas = DB::table('ventas')->get();
        return view('admin.inventario.create',['producto' => $producto, 'users' => $users,'compra' => $compra, 'ventas' => $ventas ]);
    }

    public function store(Request $request)
    {
        $inventario = new inventario();
        $inventario->id = $request->id;
        $inventario->producto_id = $request->producto_id;
        $inventario->compras_id =$request->compras_id;
        $inventario->ventas_id =$request->ventas_id;

        $inventario->save();

        return redirect()->route('admin.inventario.index', $inventario);
    }

    public function update(Request $request, $id)
    {
        $inventario = inventario::findOrFail($id);
        $inventario->id = $request->id;
        $inventario->producto_id = $request->producto_id;
        $inventario->compras_id =$request->compras_id;
        $inventario->precio_unitario_com = $request->precio_unitario_com;
        $inventario->precio_unitario_ven = $request->precio_unitario_ven;
        $inventario->cpp = $request->cpp;
        $inventario->cantidad_entrada = $request->cantidad_entrada;
        $inventario->cantidad_salida = $request->cantidad_salida;
        $inventario->valor_entrada = $request->valor_entrada;
        $inventario->valor_salida = $request->valor_salida;
        $inventario->cantidad_saldo = $request->cantidad_saldo;
        $inventario->valor_saldo = $request->valor_saldo;


        $inventario->update();
    
        return redirect()->route('admin.inventario.index');
    }

    public function imprimir ()
    {
        $inventario = DB::table('inventario')
        ->join('users','inventario.id','=','users.id')
        ->join('producto','inventario.producto_id','=','producto.producto_id')
        ->join('compra','inventario.compras_id','=','compra.compras_id')
        ->join('ventas','inventario.ventas_id','=','ventas.ventas_id')
        ->select('inventario.inventario_id','users.name','producto.nombre','producto.precio_venta','compra.precio_unitario','compra.cantidad','ventas.cantidad as cantidadven')
        ->get();
        
        $pdf = \PDF::loadView('admin.inventario.Reporte', ['inventario' => $inventario]);
        return $pdf->stream();
        //return $pdf->download('producto.pdf');
    }

    public function destroy(inventario $inventario)
    {
        $inventario->delete();
        return view('admin.inventario.index');
    }


}
