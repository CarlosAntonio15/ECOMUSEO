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
        $reservation = Reservation::all();
        return view('Reservations.index')->with('reservation', $reservation);
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


        $request->validate([
            "identification" => 'required|max:15|min:7',
            "name" => 'required|alpha|max:150',
            "lastname" =>'required|alpha|max:200',
            "reservationDate" =>'required|date|after_or_equal:date',
            "reservationHour" =>'required|max:40',
            "adultQuantity" =>'required',
            "total" =>'required',
            "tourType" =>'required',
            "email" =>'required|email|unique:reservations',
            "phone" =>'required|unique:reservations|max:8|string'
        ]);

        $ReservationN= new Reservation;
        //$ReservationN->Id= $request->id;
        $ReservationN->identification= $request->identification;
        $ReservationN->name= $request->name;
        $ReservationN->lastname= $request->lastname;
        $ReservationN->reservationDate= $request->reservationDate;
        $ReservationN->reservationHour= $request->reservationHour;
        $ReservationN->adultQuantity= $request->adultQuantity;
        $ReservationN->childrenQuantity= $request->childrenQuantity;
        $ReservationN->total= $request->total;
        $ReservationN->tourType= $request->tourType;
        $ReservationN->email= $request->email;
        $ReservationN->phone= $request->phone;

        $ReservationN->save();
        $request->session()->flash('message', 'Reservación creada correctamente.');
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
        
        $reservation = Reservation::find($id); 
        //dd($reservation);
        $reservation = $reservation[0];
        return view('Reservations.show')->with('Reservation', $reservation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $id)
    {

        $reservation = Reservation::find($id);

        //dd($reservation);

        if (is_null($reservation)){
            return redirect()->route('reservation.index');
        }
      
        return view('Reservations.create')-> with('Reservation', $reservation);
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
        $reservation = Reservation::find($id);



        //$reservation->id = $request->id;



        $reservation->identification= $request->identification;
        $reservation->name= $request->name;
        $reservation->lastname= $request->lastname;
        $reservation->reservationDate= $request->reservationDate;
        $reservation->reservationHour= $request->reservationHour;
        $reservation->adultQuantity= $request->adultQuantity;
        $reservation->childrenQuantity= $request->childrenQuantity;
        $reservation->total= $request->total;
        $reservation->tourType= $request->tourType;
        $reservation->email= $request->email;
        $reservation->phone= $request->phone;
        $reservation->save();
        $request->session()->flash('message', 'Reservación actualizada correctamente.');
        return redirect()->route('Reservations.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        Reservation::find($id)->delete();
        Session()->flash('message', 'Voluntario eliminado correctamente');
        return redirect()->route('reservation.index');
    }
}