<?php

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        return view('admin.usuario.index', compact('users'));
    }
    public function create()
    {
        return view('admin.usuario.create');
    }

    public function store(Request $request)
    {
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;

        $users->save();

        return redirect()->route('admin.usuario.index', $users);
        
    }


    public function destroy(User $users)
    {
        $users->delete();
        return back()->with('succes','usuario eliminado');
        return view('admin.usuario.index');
    }

    public function edit(User $users)
    {
        
        return view('admin.usuario.edit', compact('users'));
    }
    public function update(Request $request, User $users)
    {
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;

        $users->save();
    
        return redirect()->route('admin.usuario.index', $users);
    }

    public function editrol(User $users)
    {
        $roles = Role::all();

        return view('admin.usuario.editrol', compact('users', 'roles'));
    }


    public function rolupdate(Request $request, User $users)
    {
       
        $users->roles()->sync($request->roles);
        return redirect()->route('admin.usuario.editrol', $users)->with('info','se asignó los roles correctamente');

    }

    

    public function updeterol()
    {

    }
    
}
