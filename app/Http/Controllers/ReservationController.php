<?php
namespace App\Http\Controllers;
use App\Reservation;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationRequest;
use PDF;

class ReservationController extends Controller
{
    public function index()
    {
        $reservation = Reservation::all();
        return view('Reservations.index')->with('reservation', $reservation);
    }

    public function create()
    {
        return view('Reservations.create');
    }

    public function createRe(){
        return view('Reservations.createRe');
    }

    public function store(ReservationRequest $request)
    {
        $messages =[
            'required' => 'El campo :attribute es obligatorio ',
            'max:100' => 'El campo :attribute tiene un máximo de 100 letras',
            'email' => 'El campo :attribute debe ser tipo email',
            'unique:reservations' => 'El campo :attribute debe ser único',
            'max:8' => 'El campo :attribute debe contener máximo 8 caracteres',     
            'max:15' => 'El campo :attribute debe contener máximo 15 caracteres',
            'min:7'  => 'El campo :attribute debe contener mínimo 7 caracteres',
            'min:3'  => 'El campo :attribute debe contener mínimo 3 caracteres',
            'regex:/^[\pL\s\-]+$/u' => 'El campo :attribute no puede contener números'
        ];

        $request->validate([
            "identification" => 'required|max:15|min:7',
            "name" => 'required|max:100|regex:/^[\pL\s\-]+$/u|min:3',
            "lastname" =>'required|regex:/^[\pL\s\-]+$/u|max:100|min:4',
            "reservationDate" =>'required|date|after:equal',
            "reservationHour" =>'required|max:40',
            "adultQuantity" =>'required',
            "total" =>'required',
            "tourType" =>'required',
            "email" =>'required|email|unique:reservations',
            "phone" =>'required|unique:reservations|max:8|string|min:8',
            "status" =>'required'
        ], $messages);

        $ReservationN= new Reservation;
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
        $ReservationN->status= $request->status;
        $ReservationN->save();
        $request->session()->flash('message', 'Reservación creada correctamente.');
        return redirect()->route('reservation.index');
    }

    public function storeRe(ReservationRequest $request){
        $messages =[
            'required' => 'El campo :attribute es obligatorio ',
            'max:100' => 'El campo :attribute tiene un máximo de 100 letras',
            'email' => 'El campo :attribute debe ser tipo email',
            'unique:reservations' => 'El campo :attribute debe ser único',
            'max:8' => 'El campo :attribute debe contener máximo 8 caracteres',     
            'max:15' => 'El campo :attribute debe contener máximo 15 caracteres',
            'min:7'  => 'El campo :attribute debe contener mínimo 7 caracteres',
            'min:3'  => 'El campo :attribute debe contener mínimo 3 caracteres',
            'regex:/^[\pL\s\-]+$/u' => 'El campo :attribute no puede contener números'
        ];

        $request->validate([
            "identification" => 'required|max:15|min:7',
            "name" => 'required|max:100|regex:/^[\pL\s\-]+$/u|min:3',
            "lastname" =>'required|regex:/^[\pL\s\-]+$/u|max:100|min:4',
            "reservationDate" =>'required|date|after:equal',
            "reservationHour" =>'required|max:40',
            "adultQuantity" =>'required',
            "total" =>'required',
            "tourType" =>'required',
            "email" =>'required|email|unique:reservations',
            "phone" =>'required|unique:reservations|max:8|string|min:8',
            "status" =>'required'
        ], $messages);

        $ReservationN= new Reservation;
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
        $ReservationN->status= $request->status;
        $ReservationN->save();
        $request->session()->flash('message', 'Reservación creada correctamente.');
        return redirect()->route('actividad');
    }

    public function show(Reservation $id)
    {      
        $reservation = Reservation::find($id); 
        $reservation = $reservation[0];
        return view('Reservations.show')->with('Reservation', $reservation);
    }

    public function edit($id)
    {

        $reservation = Reservation::find($id);
        //dd($reservation);
        if (is_null($reservation)){
            return redirect()->route('reservation.index');
        }
      
        return view('Reservations.edit')-> with('reservation', $reservation);
    }

    public function update(ReservationRequest $request, $id){

        $reservation = Reservation::find($id);
        $reservation->identification= $request->identification;
        $reservation->name= $request->name;
        $reservation->lastname= $request->lastname;
        $reservation->reservationDate= $request->reservationDate;
        $reservation->reservationHour= $request->reservationHour;
        $reservation->adultQuantity= $request->adultQuantity;
        $reservation->total= $request->total;
        $reservation->email= $request->email;
        $reservation->phone= $request->phone;
        $reservation->status= $request->status;
        //dd($reservation);
        $reservation->save();
        $request->session()->flash('message', 'Reservación actualizada correctamente.');
        return redirect()->route('reservation.index');
    }

    public function createPDF(){
        $data=Reservation::all();
        View()->share('reservacion', $data);
        $pdf=PDF::loadView('reservations.allReservation', $data);
        return $pdf->download('Reservations.pdf');
    }
    public function download($id){
        
        $reservation = Reservation::find($id);
        view()->share('reservacion', $reservation);

        return PDF::loadView('Reservations.ReservacionPDF', $reservation)->download("Reservación-$reservation->id, Nombre-$reservation->nombre, Apellidos-$reservation->apellidos.pdf");
    }

    public function destroy($id)
    {
        Reservation::find($id)->delete();
        
        Session()->flash('message', 'Voluntario eliminado correctamente');
        return redirect()->route('reservation');
    }

    public function graficarReservation(){
        $reservation = Reservation::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', 
        date('Y'))->groupBy(\DB::raw("Month(created_at)"))->pluck('count');

        return view('Reservations.graficarReservation', compact('reservation'));

    }

}