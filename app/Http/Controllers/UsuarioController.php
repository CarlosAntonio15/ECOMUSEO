<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
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

    
        

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function saveRol(Request $request)
    {


        User::where('id', $request->id)

        ->update([

            'rol'=> $request->rol,

        ]);

    

    return redirect()->route('usuario.asignarol');

        /*if ($usuario) {​​

            return view('AsignarRol.rolFinal', [

                'usuario' => $usuario,

            ]);

        }​​ else {​​

            return redirect()->route('usuario.index');

        }​​*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */

}