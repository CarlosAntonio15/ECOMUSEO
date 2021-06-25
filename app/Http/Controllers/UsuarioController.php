<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;


class UsuarioController extends Controller
{

    public function index(){}

    public function asignarRol()
    {
        $user= User::all();
        return view('rol', compact('user'));
    }

    public function showrol($id)
    {
        $usuario = User::find($id);        
        return view('roles.asig', [
            'usuario' => $usuario,
        ]);
    }

    public function create(){}

    public function store(Request $request){}

    public function show(Usuario $usuario){}

    public function saveRol(Request $request)
    {
        User::where('id', $request->id)
        ->update([
            'rol'=> $request->rol,
        ]);
        return redirect()->route('usuario.asignarol');
    }
    public function destroy($id){

        User::find($id)->delete();
        return redirect()->route('usuario.asignarRol');

    }
}