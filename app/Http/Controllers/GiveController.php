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

    public function createInfo(){
        return view('give.createInfo');
    }

    public function store(giveRequest $request)
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
            "name" => 'required|max:25|regex:/^[\pL\s\-]+$/u|min:3',
            "lastname" => 'required|max:100|min:2|regex:/^[\pL\s\-]+$/u',
            "donationType" =>'required',
            "quantity" =>'required|min:1',
            "description" =>'required|max:300|min:',
            "currentDate" =>'required',
            "phone" =>'required|integer',
            "mail" =>'required|email'
        ],  $messages);

        $data =[
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

    public function storeInfo(giveRequest $request){
        $messages =[
            'required' => 'El campo :attribute es obligatorio ',
            'alpha' => 'El campo :attribute sólo puede contener letras',
            'max:100' => 'El campo :attribute tiene un máximo de 100 letras',
            'email' => 'El campo :attribute debe ser tipo email',
            'unique:donation' => 'El campo :attribute debe ser único',
            'max:50' => 'El campo :attribute debe contener máximo 50 caracteres'
        ];

        $request->validate([
            "name" => 'required|max:25|regex:/^[\pL\s\-]+$/u|min:3',
            "lastname" => 'required|max:100|min:2|regex:/^[\pL\s\-]+$/u',
            "donationType" =>'required',
            "quantity" =>'required|min:1',
            "description" =>'required|max:300|min:',
            "currentDate" =>'required',
            "phone" =>'required|integer',
            "mail" =>'required|email'
        ],  $messages);

        $data =[
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
        return redirect()->route('realizarDonaciones');
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
        //dd($give);
        return view('give.create')->with('give', $give);
    }

    public function update(giveRequest $request, $id)
    {
        $give = give::find($id);
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
