<?php
namespace App\Http\Controllers;
use App\Entrada;
use Illuminate\Http\Request;
use App\Http\Requests\EntradaRequest;
use PDF;
use Response;

class EntradaController extends Controller
{
    public function index()
    {
        $entradas = Entrada::orderBy('id', 'desc')->paginate(3);
       
        return view('tiquete.index')->with('entradas', $entradas);
    }
    public function create()
    {
        return view('Tiquete.create');
    }
    public function store(EntradaRequest $request)
    {
        $messages =[
            'required' => 'El campo :attribute es obligatorio ',
            'max:100' => 'El campo :attribute tiene un máximo de 100 letras',
            'min:3'  => 'El campo :attribute debe contener mínimo 3 caracteres',
            'regex:/^[\pL\s\-]+$/u' => 'El campo :attribute no puede contener números'
        ];

        $request->validate([
            "nombre" => 'required|max:100|regex:/^[\pL\s\-]+$/u|min:3',
            "adultQuantity" => 'required',
            "childrenQuantity" =>'required',
            "tourType" =>'required',
            "total"=>'required'
        ], $messages);
        
        $data=[
            'nombre'=> $request->nombre,
            'adultQuantity'=>$request->adultQuantity, 
            'childrenQuantity'=>$request->childrenQuantity, 
            'tourType'=>$request->tourType,
            'total'=>$request->total,
        ];
        
        $entrada= Entrada::create($data);
        $request->session()->flash('message','Tiquete comprado');
        $request->session()->flash('id',$entrada->id);
        return redirect()->route('tiquete.index');
        
    }
    public function createPDF(){
        $data=Entrada::all();
        View()->share('tiquete', $data);
        $pdf=PDF::loadView('tiquete.allTiquete', $data);
        return $pdf->download('Tiquetes.pdf');
    }
    public function download($id){
        
        $entrada = Entrada::find($id);
        view()->share('tiquete', $entrada);

        return PDF::loadView('tiquete.tiquetePDF', $entrada)->download("Entrada-$entrada->id, Nombre-$entrada->nombre, Tour-$entrada->tourType.pdf");
    }

    public function destroy($id)
    {
        Entrada::find($id)->delete();
        
        Session()->flash('message', 'Tiquete eliminado correctamente');
        return redirect()->route('tiquete.index');
    }

    public function graficarEntrada(){
        $entradas = Entrada::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', 
        date('Y'))->groupBy(\DB::raw("Month(created_at)"))->pluck('count');

        return view('Tiquete.graficarEntrada', compact('entradas'));

    }
}