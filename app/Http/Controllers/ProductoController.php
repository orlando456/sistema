<?php

namespace App\Http\Controllers;

use App\Models\producto;
use PDF;
use App\Models\tipodeproducto;
use App\Models\proveedores;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function index(Request $request)
    {
        $producto = DB::table('producto')
        ->join('tipodeproducto','producto.tipo_id','=','tipodeproducto.tipo_id')
        ->join('proveedores','producto.proveedores_id','=','proveedores.proveedores_id')
        ->select('producto.producto_id','tipodeproducto.nombre','proveedores.nombre as prove','producto.nombre as nombr','producto.marca','producto.precio_venta','producto.talla','producto.color','producto.stock','producto.descripcion')
        ->get();
        return view('admin.producto.index',['producto' => $producto]);
    }

    public function create()
    {
        $tipodeproducto = DB::table('tipodeproducto')->get();
        $proveedores = DB::table('proveedores')->get();
        return view('admin.producto.create',['tipodeproducto' => $tipodeproducto, 'proveedores' => $proveedores]);
    }

    public function store(Request $request)
    {
        $producto = new producto();
        $producto->tipo_id = $request->tipo_id;
        $producto->proveedores_id = $request->proveedores_id;
        $producto->nombre = $request->nombre;
        $producto->marca = $request->marca;
        $producto->precio_venta = $request->precio_venta;
        $producto->talla = $request->talla;
        $producto->color = $request->color;
        $producto->stock = $request->stock;
        $producto->descripcion = $request->descripcion;

        $producto->save();

        return redirect()->route('admin.producto.index', $producto);
    }

    public function edit( $id )
    {
        $producto = producto::findOrFail($id);
        $tipodeproducto = DB::table('tipodeproducto')->get();
        $proveedores = DB::table('proveedores')->get();
        
        return view('admin.producto.edit', ['tipodeproducto' => $tipodeproducto, 'proveedores' => $proveedores, 'producto' => $producto ]);
    }

    

    public function update(Request $request, $id)
    {
        $producto = producto::findOrFail($id);
        $producto->tipo_id = $request->tipo_id;
        $producto->proveedores_id = $request->proveedores_id;
        $producto->nombre = $request->nombre;
        $producto->marca = $request->marca;
        $producto->precio_venta = $request->precio_venta;
        $producto->talla = $request->talla;
        $producto->color = $request->color;
        $producto->stock = $request->stock;
        $producto->descripcion = $request->descripcion;


        $producto->update();
    
        return redirect()->route('admin.producto.index');
    }

    public function imprimir ()
    {
        $producto = DB::table('producto')
        ->join('tipodeproducto','producto.tipo_id','=','tipodeproducto.tipo_id')
        ->join('proveedores','producto.proveedores_id','=','proveedores.proveedores_id')
        ->select('producto.producto_id','tipodeproducto.nombre','proveedores.nombre as prove','producto.nombre as nombr','producto.marca','producto.precio_venta','producto.talla','producto.color','producto.stock','producto.descripcion')
        ->get();
        
        $pdf = \PDF::loadView('admin.producto.Reporte', ['producto' => $producto]);
        return $pdf->stream();
        //return $pdf->download('producto.pdf');
    }


    public function destroy(producto $producto)
    {
        $producto->delete();
        return back()->with('succes','producto eliminado');
        return view('admin.producto.index');
    }


}
