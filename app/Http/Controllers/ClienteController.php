<?php

namespace App\Http\Controllers;
use App\Models\cliente; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ClienteController extends Controller
{
    public function index(Request $request)
    {
        $cliente = cliente::all();
        return view('admin.cliente.index', compact('cliente'));
    }
    public function create()
    {
        return view('admin.cliente.create');
    }

    public function store(Request $request)
    {
        $request->validate( rules: [
            'nombre' => 'required|min:3|max15',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'detalle' => 'required',
            'edad' => 'required'

        ]);
        $cliente = new cliente();
        $cliente->nombre = $request->nombre;
        $cliente->apellido_paterno = $request->apellido_paterno;
        $cliente->apellido_materno = $request->apellido_materno;
        $cliente->detalle = $request->detalle;
        $cliente->edad = $request->edad;
        $cliente->telefono = $request->telefono;

        $cliente->save();

        return redirect()->route('admin.cliente.index', $cliente);
        
    }


    public function destroy(cliente $cliente)
    {
        $cliente->delete();
        return back()->with('succes','cliente eliminado');
        return view('admin.cliente.index');
    }

    public function edit(cliente $cliente)
    {
        
        return view('admin.cliente.edit', compact('cliente'));
    }

    public function update(Request $request, cliente $cliente)
    {
        $cliente->nombre = $request->nombre;
        $cliente->apellido_paterno = $request->apellido_paterno;
        $cliente->apellido_materno = $request->apellido_materno;
        $cliente->detalle = $request->detalle;
        $cliente->edad = $request->edad;
        $cliente->telefono = $request->telefono;

        $cliente->save();
    
        return redirect()->route('admin.cliente.index', $cliente);
    }
        
}
