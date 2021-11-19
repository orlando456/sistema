<?php

namespace App\Http\Controllers;

use App\Models\tipodeproducto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    public function index()
    {
        $tipodeproducto = tipodeproducto::all();
        return view('admin.tipo.index', compact('tipodeproducto'));
    }
    public function create()
    {
        return view('admin.tipo.create');
    }

    public function store(Request $request)
    {
        $tipodeproducto = new tipodeproducto();
        $tipodeproducto->nombre = $request->nombre;
        $tipodeproducto->tipo = $request->tipo;
        $tipodeproducto->descripcion = $request->descripcion;
        

        $tipodeproducto->save();

        return redirect()->route('admin.tipo.index', $tipodeproducto);
    }
    public function destroy(tipodeproducto $tipodeproducto)
    {
        $tipodeproducto->delete();
        return back()->with('succes','tipo de producto eliminado');
        return view('admin.tipo.index');
    }

    public function edit(tipodeproducto $tipodeproducto)
    {
        
        return view('admin.tipo.edit', compact('tipodeproducto'));
    }

    public function update(Request $request, tipodeproducto $tipodeproducto)
    {
        $tipodeproducto->nombre = $request->nombre;
        $tipodeproducto->tipo = $request->tipo;
        $tipodeproducto->descripcion = $request->descripcion;

        $tipodeproducto->save();
    
        return redirect()->route('admin.tipo.index', $tipodeproducto);
    }

}
