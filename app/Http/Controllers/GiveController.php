<?php
namespace App\Http\Controllers;
use App\give;
use Illuminate\Http\Request;
use App\Http\Requests\giveRequest;

class GiveController extends Controller
{

    public function index()
    {
        $give = give::all();
        return view('give.index')->with('give', $give);
    }

    public function create()
    {
        return view('give.create');
    }

    public function store(Request $request)
    {
        $messages =[
            'required' => 'El campo :attribute es obligatorio ',
            'alpha' => 'El campo :attribute sólo puede contener letras',
            'max:100' => 'El campo :attribute tiene un máximo de 100 letras',
            'email' => 'El campo :attribute debe ser tipo email',
            'unique:donation' => 'El campo :attribute debe ser único',
            'max:50' => 'El campo :attribute debe contener máximo 50 caracteres'
        ];

        $request->validate([
            "id"=> 'required|min:7|max:15',
            "name" => 'required|max:50|regex:/^[\pL\s\-]+$/u|min:3',
            "lastName" => 'required|max:100|min:4|regex:/^[\pL\s\-]+$/u',
            "donationType" =>'required|max:9|min:8',
            "quantity" =>'required|min:4',
            "description" =>'required|max:300|min:30',
            "currentDate" =>'required',
            "phone" =>'required|unique:donation|integer',
            "mail" =>'required|email|unique:donation'
        ],  $messages);
        
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

    public function show(give $id)
    {
        $give = give::find($id);
        $give = $give[0];
        return view('give.show')->with('give', $give);
    }

    public function edit($id)
    {
        $give = give::find($id);
        if(is_null($give)){
            return redirect()->route('index');
        }
        return view('give.create')->with('give', $give);
    }

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

    public function destroy($id)
    {
        give::find($id)->delete();
        session()->flash('message', 'Donación eliminada corectamente');
        return redirect()->route('give.index');
    }
}