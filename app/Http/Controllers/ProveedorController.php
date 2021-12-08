<?php

namespace App\Http\Controllers;

use App\Models\proveedores;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index(Request $request)
    {
        $proveedores = proveedores::all();
        return view('admin.proveedor.index', compact('proveedores') );
    }

    public function create()
    {
        return view('admin.proveedor.create');
    }

    public function store(Request $request)
    {
        $proveedores = new proveedores();
        $proveedores->nombre_empresa = $request->nombre_empresa;
        
        $proveedores->nombre = $request->nombre;
        $proveedores->apellido_paterno = $request->apellido_paterno;
        $proveedores->apellido_materno = $request->apellido_materno;
        $proveedores->nit = $request->nit;
        $proveedores->ci = $request->ci;
        $proveedores->direccion = $request->direccion;
        $proveedores->edad = $request->edad;
        $proveedores->email = $request->email;
        $proveedores->ciudad = $request->ciudad;
        $proveedores->telefono = $request->telefono;
        $proveedores->estado = $request->estado;

        $proveedores->save();

        return redirect()->route('admin.proveedor.index', $proveedores);
    }
    public function show(proveedores $proveedores)
    {
        //$users = User::find($id);
        return view('admin.proveedor.show',compact('proveedores'));
    }

    public function edit(proveedores $proveedores)
    {
        
        return view('admin.proveedor.edit', compact('proveedores'));
    }

    public function update(Request $request, proveedores $proveedores)
    {
        $proveedores->nombre_empresa = $request->nombre_empresa;
        
        $proveedores->nombre = $request->nombre;
        $proveedores->apellido_paterno = $request->apellido_paterno;
        $proveedores->apellido_materno = $request->apellido_materno;
        $proveedores->nit = $request->nit;
        $proveedores->ci = $request->ci;
        $proveedores->edad = $request->edad;
        $proveedores->email = $request->email;
        $proveedores->direccion = $request->direccion;
        $proveedores->ciudad = $request->ciudad;
        $proveedores->telefono = $request->telefono;
        $proveedores->estado = $request->estado;

        $proveedores->save();
    
        return redirect()->route('admin.proveedor.index', $proveedores);
    }

    public function destroy(proveedores $proveedores)
    {
        $proveedores->delete();
        return back()->with('succes','proveedor eliminado');
        return view('admin.proveedor.index');
    }
}