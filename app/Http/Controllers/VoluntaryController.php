<?php

namespace App\Http\Controllers;

use App\voluntary;
use Illuminate\Http\Request;
use App\Http\Requests\VoluntaryRequest;



class VoluntaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voluntaryC = voluntary::all();
        //dd($voluntaryC);
        return view('voluntary')->with('voluntaryN', $voluntaryC);
    }
    public function indexGus()
    {
        $voluntaryC = voluntary::all();
        //dd($voluntaryC);
        return view('Volun.index')->with('Volun', $voluntaryC);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Volun.create');
    }


    public function createGus()
    {
        return view('Volun.createGus');
    }


  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VoluntaryRequest $request)
    {
 
        $messages =[
            'required' => 'El campo :attribute es obligatorio ',
            'alpha' => 'El campo :attribute sólo puede contener letras',
            'max:100' => 'El campo :attribute tiene un máximo de 100 letras',
            'email' => 'El campo :attribute debe ser tipo email',
            'unique:voluntaries' => 'El campo :attribute debe ser único',
            'max:8' => 'El campo :attribute debe contener máximo 8 caracteres'      
        ];

        $request->validate([
            "Nombre" => 'required|alpha|max:100',
            "Apellido_1" => 'required|max:100|alpha',
            "Apellido_2" =>'required|max:100|alpha',
            "Edad" =>'required',
            "Telefono" =>'required|max:8',
            "Direccion" =>'required',
            "Email" =>'required|email|unique:voluntaries',
            "Descripcion" =>'required'
        ],$messages);

        $VoluntaryN= new voluntary;
        //$VoluntaryN->Id= $request->id;
        $VoluntaryN->Nombre= $request->Nombre;
        $VoluntaryN->Apellido_1= $request->Apellido_1;
        $VoluntaryN->Apellido_2= $request->Apellido_2;
        $VoluntaryN->Edad= $request->Edad;
        $VoluntaryN->Telefono= $request->Telefono;
        $VoluntaryN->Direccion= $request->Direccion;
        $VoluntaryN->Email= $request->Email;
        $VoluntaryN->Descripcion= $request->Descripcion;

        $VoluntaryN->save();
        return redirect()->route('amigoReq');
    }


    public function storeGus(VoluntaryRequest $request)
    {
        $data = [
            //'Id'=>$request->Id,
            'Nombre'=>$request->Nombre,
            'Apellido_1'=>$request->Apellido_1,
            'Apellido_2'=>$request->Apellido_2,
            'Edad'=>$request->Edad,
            'Telefono'=>$request->Telefono,
            'Direccion'=>$request->Direccion,
            'Email'=>$request->Email,
            'Descripcion' =>$request->Descripcion,
        ];
        $voluntary = Voluntary::create($data);
        $request->session()->flash('message', 'Voluntario creado correctamente.');
        return redirect()->route('voluntary.index');
    }
    




    /**
     * Display the specified resource.
     *
     * @param  \App\voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function show(Voluntary $id)
    {
        $voluntary = Voluntary::find($id);
        $voluntary = $voluntary[0];
        return view('Volun.show')->with('Voluntary', $voluntary);
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        $voluntary = Voluntary::find($id);
        //dd($voluntary);
        if (is_null($voluntary)) {
            return redirect()->route('index'); 
        }
        return view('Volun.createGus')-> with('voluntary', $voluntary);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function update(VoluntaryRequest $request, $id)
    {
        $voluntary = Voluntary::find($id);
        $voluntary->Nombre= $request->Nombre;
        $voluntary->Apellido_1= $request->Apellido_1;
        $voluntary->Apellido_2= $request->Apellido_2;
        $voluntary->Edad= $request->Edad;
        $voluntary->Telefono= $request->Telefono;
        $voluntary->Direccion= $request->Direccion;
        $voluntary->Email= $request->Email;
        $voluntary->Descripcion= $request->Descripcion;
        $voluntary->save();
        $request->session()->flash('message', 'Voluntario actualizado correctamente.');
        return redirect()->route('voluntary.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Voluntary::find($id)->delete();
        Session()->flash('message', 'Voluntario eliminado correctamente');
        return redirect()->route('voluntary.index');
    }
}
