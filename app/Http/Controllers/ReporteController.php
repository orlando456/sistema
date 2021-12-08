<?php

namespace App\Http\Controllers;

use App\Models\producto;
use App\Models\ventas; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function index()
    {
        $ventas = ventas::all();

        $producto = DB::table('producto')
        ->join('tipodeproducto','producto.tipo_id','=','tipodeproducto.tipo_id')
        ->join('proveedores','producto.proveedores_id','=','proveedores.proveedores_id')
        ->select('producto.producto_id','tipodeproducto.nombre','proveedores.nombre as prove','producto.nombre as nombr','producto.marca','producto.precio_venta','producto.talla','producto.color','producto.stock','producto.descripcion')
        ->get();

       return view('admin.reporte.index',['ventas' => $ventas, 'producto' => $producto]);

    }
}
