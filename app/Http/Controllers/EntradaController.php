<?php

namespace App\Http\Controllers;

use App\Entrada;
use Illuminate\Http\Request;
use App\Http\Requests\EntradaRequest;

class EntradaController extends Controller
{
    public function index()
    {
        $entrada = Entrada::All();
        return view('tiquete.index')->with('entrada', $entrada);
    }
    public function create()
    {
        return view('Tiquete.create');
    }
    public function store(EntradaRequest $request){
        $data=[
            'nombre'=> $request->nombre,
            'adultQuantity'=>$request->adultQuantity, 
            'childrenQuantity'=>$request->childrenQuantity, 
            'tourType'=>$request->tourType,
        ];
        $entrada= Entrada::create($data);
        $request->session()->flash('message','Tiquete comprado');
        return redirect()->route('tiquete.index');
    }
}


