<?php
<<<<<<< HEAD

namespace App\Http\Controllers;

=======
namespace App\Http\Controllers;
>>>>>>> 03be68e9caba48fcf65250246fa5624fc968c925
use App\give;
use Illuminate\Http\Request;
use App\Http\Requests\giveRequest;

class GiveController extends Controller
{
<<<<<<< HEAD
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
=======

>>>>>>> 03be68e9caba48fcf65250246fa5624fc968c925
    public function index()
    {
        $give = give::all();
        return view('give.index')->with('give', $give);
    }

<<<<<<< HEAD
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
=======
>>>>>>> 03be68e9caba48fcf65250246fa5624fc968c925
    public function create()
    {
        return view('give.create');
    }

<<<<<<< HEAD
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
=======
>>>>>>> 03be68e9caba48fcf65250246fa5624fc968c925
    public function store(Request $request)
    {
        $data =[
            'id'=>$request->id,
            'name'=>$request->name,
            'lastname'=>$request->lastname, 
            'donationType'=>$request->donationType,
            'quantity'=>$request->quantity,
            'description'=>$request->description,
            'currentDate'=>$request->currentDate,
            'phone'=>$request->phone,
            'mail'=>$request->mail
        ];
        $give = give::create($data);
        $request->session()->flash('message', 'donacion enviada correctamenta');
        
        return redirect()->route('give.index');
    }

<<<<<<< HEAD
    /**
     * Display the specified resource.
     *
     * @param  \App\give  $give
     * @return \Illuminate\Http\Response
     */
=======
>>>>>>> 03be68e9caba48fcf65250246fa5624fc968c925
    public function show(give $id)
    {
        $give = give::find($id);
        $give = $give[0];
        return view('give.show')->with('give', $give);
    }

<<<<<<< HEAD
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\give  $give
     * @return \Illuminate\Http\Response
     */
=======
>>>>>>> 03be68e9caba48fcf65250246fa5624fc968c925
    public function edit($id)
    {
        $give = give::find($id);
        if(is_null($give)){
            return redirect()->route('index');
        }
        return view('give.create')->with('give', $give);
    }

<<<<<<< HEAD
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\give  $give
     * @return \Illuminate\Http\Response
     */
=======
>>>>>>> 03be68e9caba48fcf65250246fa5624fc968c925
    public function update(giveRequest $request, $id)
    {
        $give = give::find($id);
        $give-> id = $request->id;
        $give-> name = $request->name;
        $give-> lastname = $request->lastname; 
        $give-> donationType = $request->donationType;
        $give-> quantity = $request->quantity;
        $give-> description = $request->description;
        $give-> currentDate = $request->currentDate;
        $give-> phone = $request->phone;
        $give-> mail = $request->mail;
        $give->save();
        $request->session()->flash('message','Donación acualizada correctamente');
        return redirect()->route('give.index');
    }

<<<<<<< HEAD
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\give  $give
     * @return \Illuminate\Http\Response
     */
=======
>>>>>>> 03be68e9caba48fcf65250246fa5624fc968c925
    public function destroy($id)
    {
        give::find($id)->delete();
        session()->flash('message', 'Donación eliminada corectamente');
        return redirect()->route('give.index');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 03be68e9caba48fcf65250246fa5624fc968c925
