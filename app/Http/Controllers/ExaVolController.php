<?php

namespace App\Http\Controllers;

use App\exaVol;
use Illuminate\Http\Request;

class ExaVolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exaVolC = exaVol::all();
        return view('exaVol.ejemplo')->with('exaVol', $exaVolC);
 
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
     * @param  \App\exaVol  $exaVol
     * @return \Illuminate\Http\Response
     */
    public function show(exaVol $exaVol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\exaVol  $exaVol
     * @return \Illuminate\Http\Response
     */
    public function edit(exaVol $exaVol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\exaVol  $exaVol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, exaVol $exaVol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\exaVol  $exaVol
     * @return \Illuminate\Http\Response
     */
    public function destroy(exaVol $exaVol)
    {
        //
    }
}
