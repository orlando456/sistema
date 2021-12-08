<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\cliente;
use App\Models\ventas;
use PDF;
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
        ->join('producto','ventas.producto_id','=','producto.producto_id')
        ->join('tipodeproducto','ventas.tipo_id','=','tipodeproducto.tipo_id')
        ->select('ventas.ventas_id','users.name','cliente.ci','producto.nombre as n','tipodeproducto.tipo_id','ventas.cantidad','ventas.total','ventas.cambio')
        ->get();
        return view('admin.ventas.index',['ventas' => $ventas]);
    }
    public function create()
    {
        $users = DB::table('users')->get();
        $cliente = DB::table('cliente')->get();

        $producto = DB::table('producto')->get();
        $tipodeproducto = DB::table('tipodeproducto')->get();
        return view('admin.ventas.create',['users' => $users, 'cliente' => $cliente, 'producto' => $producto , 'tipodeproducto' => $tipodeproducto ]);
    }

    public function store(Request $request)
    {
        $ventas = new ventas();
        $ventas->id = $request->id;
        $ventas->id_cliente = $request->id_cliente;
        
        $ventas->producto_id = $request->producto_id;
        $ventas->tipo_id = $request->tipo_id;
        $ventas->cantidad = $request->cantidad;
        $ventas->total = $request->total;
        $ventas->cambio = $request->cambio;
        
        $ventas->save();

        return redirect()->route('admin.ventas.index', $ventas);
    }

    public function update(Request $request, $id)
    {
        $ventas = ventas::findOrFail($id);
        $ventas->id = $request->id;
        $ventas->id_cliente = $request->id_cliente;
        $ventas->producto_id = $request->producto_id;
        $ventas->tipo_id = $request->tipo_id;
        $ventas->cantidad = $request->cantidad;
        $ventas->total = $request->total;
        $ventas->cambio = $request->cambio;
        
        $ventas->update();
    
        return redirect()->route('admin.ventas.index');
    }

    public function imprimir ()
    {
        $ventas = DB::table('ventas')
        ->join('users','ventas.id','=','users.id')
        ->join('cliente','ventas.id_cliente','=','cliente.id_cliente')
        ->join('producto','ventas.producto_id','=','producto.producto_id')
        ->join('tipodeproducto','ventas.tipo_id','=','tipodeproducto.tipo_id')
        ->select('ventas.ventas_id','users.name','cliente.ci','producto.nombre as n','tipodeproducto.tipo_id','ventas.cantidad','ventas.total','ventas.cambio')
        ->get();
        
        $pdf = PDF::loadView('admin.ventas.reporte', ['ventas' => $ventas]);
        return $pdf->stream();
        //return $pdf->download('producto.pdf');
    }

    public function destroy(ventas $ventas)
    {
        $ventas->delete();
        return back()->with('succes','venta eliminada');
        return view('admin.ventas.index');
    }
}   
