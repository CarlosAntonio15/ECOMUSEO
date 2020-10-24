<?php

namespace App\Http\Controllers;

use App\Voluntary;
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
        $voluntaryC = Voluntary::all();
        //dd($voluntaryC);
        return view('voluntary')->with('voluntaryN', $voluntaryC);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //$voluntary= Voluntary
        
        return view('Volun.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VoluntaryRequest $request)
    {
        $VoluntaryN= new voluntary;
        //$VoluntaryN->Id= $request->id;
        $VoluntaryN->Nombre= $request->Nombre;
        $VoluntaryN->Apellido_1= $request->Apellido_1;
        $VoluntaryN->Apellido_2= $request->Apellido_2;
        $VoluntaryN->Edad= $request->Edad;
        $VoluntaryN->Telefono= $request->Telefono;
        $VoluntaryN->Direccion= $request->Direccion;
        $VoluntaryN->Email= $request->Email;
        $VoluntaryN->Cantidad= $request->Cantidad ?$request->Cantidad :null;
        $VoluntaryN->Descripcion= $request->Descripcion;

        $VoluntaryN->save();
        return redirect()->route('amigoReq');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function show(Voluntary $id)
    {
        $VoluntaryB = Voluntary::find($id); 
        return view('Volun.show',compact('VoluntaryB'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function edit(Voluntary $id)
    {
     
       
    $VoluntaryE = Voluntary::find($id);
    return view('Volun.edit', compact('VoluntaryE'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voluntary $id)
    {
        $VoluntaryU = Voluntary::find($id);
        $VoluntaryU->id = $request->id;
        $VoluntaryU->nombre = $request->nombre;
        $VoluntaryU->apellido1 = $request->apellido1;
        $VoluntaryU->apellido2 = $request->apellido2;
        $VoluntaryU->telefono = $request->telefono;
        $VoluntaryU->direccion = $request->direccion;
        $VoluntaryU->email = $request->email;
        $VoluntaryU->descriocion = $request->descripcion;
        
        $VoluntaryU->save();
        return redirect()->route('Voluntary.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voluntary $id)
    {
        //try{
        $VoluntaryE = Voluntary::find($id);
        $VoluntaryE->delete();
        return redirect()->route('Voluntary.index');
        //} //catch ('Exception $e'){
           // return "fatal error".$e->getMessage();
       // }
    }
}
