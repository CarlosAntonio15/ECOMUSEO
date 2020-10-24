<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

use App\Http\Requests\ReservationRequest;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservationC = Reservation::all();
        //dd($voluntaryC);
        return view('reservation')->with('reservationN', $reservationC);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        
        return view('Reservations.create');
    }

   
    public function store(ReservationRequest $request)
    {
        $ReservationN= new reservation;
        //$ReservationN->Id= $request->id;
        $ReservationN->identification= $request->identification;
        $ReservationN->name= $request->name;
        $ReservationN->lastname= $request->lastname;
        $ReservationN->reservationDate= $request->reservationDate;
        $ReservationN->reservationHour= $request->reservationHour;
        $ReservationN->adultQuantity= $request->adultQuantity;
        $ReservationN->childrenQuantity= $request->childrenQuantity;
        $ReservationN->tourType= $request->tourType;
        $ReservationN->tourPrice= $request->tourPrice;
        $ReservationN->email= $request->email;
        $ReservationN->phone= $request->phone;

        $ReservationN->save();
        return redirect()->route('welcome');
    }

    //

    /**
     * Display the specified resource.
     *
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $id)
    {
        $DonationB = Reservation::find($id); 
        return view('Reservation.show',compact('ReservationB'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $id)
    {

    $ReservationE = Reservation::find($id);
    return view('Reservation.edit', compact('ReservationE'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $id)
    {
        $ReservationU = Reservation::find($id);
        $ReservationU->identification= $request->identification;
        $ReservationU->name= $request->name;
        $ReservationU->lastname= $request->lastname;
        $ReservationU->reservationDate= $request->reservationDate;
        $ReservationU->reservationHour= $request->reservationHour;
        $ReservationU->adultQuantity= $request->adultQuantity;
        $ReservationU->childrenQuantity= $request->childrenQuantity;
        $ReservationU->tourType= $request->tourType;
        $ReservationU->tourPrice= $request->tourPrice;
        $ReservationU->email= $request->email;
        $ReservationU->phone= $request->phone;
        $ReservationU->save();

        return redirect()->route('Reservation.reservation');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $id)
    {
        $ReservationE = Reservation::find($id); $ReservationE->delete();
    }
}