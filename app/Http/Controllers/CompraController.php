<?php

namespace App\Http\Controllers;
use App\Models\compra;
use PDF;
use app\Models\User;
use app\Models\producto;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CompraController extends Controller
{
    public function index(Request $request)
    {
        $compra = DB::table('compra')
        ->join('users','compra.id','=','users.id')
        ->join('producto','compra.producto_id','=','producto.producto_id')
        ->join('proveedores','compra.proveedores_id','=','proveedores.proveedores_id')
        ->select('compra.compras_id','users.name','producto.nombre','proveedores.nombre as nom','compra.precio_unitario','compra.cantidad','compra.total')
        ->get();
        return view('admin.compra.index',['compra' => $compra]);
    }

    public function create()
    {
        $users = DB::table('users')->get();
        $producto = DB::table('producto')->get();
        $proveedores = DB::table('proveedores')->get();
        return view('admin.compra.create',['users' => $users, 'producto' => $producto, 'proveedores' => $proveedores]);
    }

    public function store(Request $request)
    {
        $compra = new compra();
        $compra->id = $request->id; 
        $compra->producto_id = $request->producto_id;
        $compra->proveedores_id = $request->proveedores_id;
        $compra->precio_unitario = $request->precio_unitario;
        $compra->cantidad = $request->cantidad;
        $compra->total = $request->total;

        $compra->save();

        return redirect()->route('admin.compra.index', $compra);
    }

    public function update(Request $request, $id)
    {
        $compra = compra::findOrFail($id);
        $compra->id = $request->id;
        $compra->producto_id = $request->producto_id;
        $compra->proveedores_id = $request->proveedores_id;
        $compra->precio_unitario = $request->precio_unitario;
        $compra->cantidad = $request->cantidad;
        $compra->total = $request->total;


        $compra->update();
    
        return redirect()->route('admin.compra.index');
    }

    public function imprimir ()
    {
        $compra = DB::table('compra')
        ->join('users','compra.id','=','users.id')
        ->join('producto','compra.producto_id','=','producto.producto_id')
        ->join('proveedores','compra.proveedores_id','=','proveedores.proveedores_id')
        ->select('compra.compras_id','users.name','producto.nombre','proveedores.nombre as nom','compra.precio_unitario','compra.cantidad','compra.total')
        ->get();
        
        $pdf = \PDF::loadView('admin.compra.Reporte', ['compra' => $compra]);
        return $pdf->stream();
        //return $pdf->download('producto.pdf');
    }


    public function destroy(compra $compra)
    {
        $compra->delete();
        return back()->with('succes','compra eliminado');
        return view('admin.compra.index');
    }
}
