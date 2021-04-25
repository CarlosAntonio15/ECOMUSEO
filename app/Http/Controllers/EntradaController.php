<?php

namespace App\Http\Controllers;

use App\Entrada;
use Illuminate\Http\Request;
use App\Http\Requests\EntradaRequest;
use PDF;
use Response;

class EntradaController extends Controller
{
    public function index()
    {
        $entradas = Entrada::orderBy('id', 'desc')->paginate(3);
       
        return view('tiquete.index')->with('entradas', $entradas);
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
        $request->session()->flash('id',$entrada->id);
        return redirect()->route('tiquete.index');
        
    }
    public function createPDF() {
    
        $data= Entrada::all();
        view()->share('tiquete',$data );
        $pdf = PDF::loadView('tiquete.allTiquete', $data);
        return $pdf->download('Tiquetes.pdf');
         
    }

    public function download($id){

        $entrada = Entrada::find($id);
        view()->share('tiquete', $entrada );
        
        return PDF::loadView('tiquete.tiquetePDF', $entrada)->download("Entrada-$entrada->id, Nombre-$entrada->nombre, Tour-$entrada->tourType.pdf");
    }

}


