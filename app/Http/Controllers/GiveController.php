<?php

namespace App\Http\Controllers;

use App\give;
use Illuminate\Http\Request;

class GiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $give = give::all();
        return view('give.index')->with('give', $give);
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
     * @param  \App\give  $give
     * @return \Illuminate\Http\Response
     */
    public function show(give $give)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\give  $give
     * @return \Illuminate\Http\Response
     */
    public function edit(give $give)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\give  $give
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, give $give)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\give  $give
     * @return \Illuminate\Http\Response
     */
    public function destroy(give $give)
    {
        //
    }
}
