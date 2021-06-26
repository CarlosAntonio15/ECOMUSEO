<?php
namespace App\Http\Controllers;
use App\voluntary;
use Illuminate\Http\Request;
use App\Http\Requests\VoluntaryRequest;
use Response;
use PDF;

class VoluntaryController extends Controller
{

    public function index()
    {
        $voluntaryC = voluntary::orderBy('id', 'desc')->paginate(6);
        return view('voluntary')->with('voluntaryN', $voluntaryC);
    }
    public function indexGus()
    {
        $voluntaryC = voluntary::orderBy('id', 'desc')->paginate(3);
        return view('Volun.index')->with('Volun', $voluntaryC);
    }

    public function create()
    {
        return view('Volun.create');
    }

    public function createGus()
    {
        return view('Volun.createGus');
    }

    public function store(VoluntaryRequest $request)
    {
 
        $messages =[
            'required' => 'El campo :attribute es obligatorio ',
            'alpha' => 'El campo :attribute sólo puede contener letras',
            'max:100' => 'El campo :attribute tiene un máximo de 50 letras',
            'email' => 'El campo :attribute debe ser tipo email',
            'unique:voluntaries' => 'El campo :attribute debe ser único',
            'max:8' => 'El campo :attribute debe contener máximo 8 caracteres'      
        ];

        $request->validate([
            "Nombre" => 'required|regex:/^[\pL\s\-]+$/u|max:50|min:3',
            "Apellido_1" => 'required|max:50|regex:/^[\pL\s\-]+$/u|min:4',
            "Apellido_2" =>'required|max:50|regex:/^[\pL\s\-]+$/u|min:4',
            "Edad" =>'required',
            "Telefono" =>'required|max:8|min:8|',
            "Direccion" =>'required|min:5|max:50',
            "Email" =>'required|email|unique:voluntaries',
            "Descripcion" =>'required|min:20|max:300'
        ],$messages);

        $VoluntaryN= new voluntary;
        $VoluntaryN->Nombre= $request->Nombre;
        $VoluntaryN->Apellido_1= $request->Apellido_1;
        $VoluntaryN->Apellido_2= $request->Apellido_2;
        $VoluntaryN->Edad= $request->Edad;
        $VoluntaryN->Telefono= $request->Telefono;
        $VoluntaryN->Direccion= $request->Direccion;
        $VoluntaryN->Email= $request->Email;
        $VoluntaryN->Descripcion= $request->Descripcion;
        //dd($voluntaryN);
        $VoluntaryN->save();
        $request->session()->flash('message', 'Voluntario creado correctamente.');
        return redirect()->route('amigoReq');
    }

    public function storeGus(VoluntaryRequest $request)
    {
        $messages =[
            'required' => 'El campo :attribute es obligatorio ',
            'alpha' => 'El campo :attribute sólo puede contener letras',
            'max:100' => 'El campo :attribute tiene un máximo de 50 letras',
            'email' => 'El campo :attribute debe ser tipo email',
            'unique:voluntaries' => 'El campo :attribute debe ser único',
            'max:8' => 'El campo :attribute debe contener máximo 8 caracteres'      
        ];

        $request->validate([
            "Nombre" => 'required|regex:/^[\pL\s\-]+$/u|max:50|min:3',
            "Apellido_1" => 'required|max:50|regex:/^[\pL\s\-]+$/u|min:4',
            "Apellido_2" =>'required|max:50|regex:/^[\pL\s\-]+$/u|min:4',
            "Edad" =>'required',
            "Telefono" =>'required|max:8|min:8|',
            "Direccion" =>'required|min:5|max:50',
            "Email" =>'required|email|unique:voluntaries',
            "Descripcion" =>'required|min:20|max:300'
        ],$messages);

        $data = [
            'Nombre'=>$request->Nombre,
            'Apellido_1'=>$request->Apellido_1,
            'Apellido_2'=>$request->Apellido_2,
            'Edad'=>$request->Edad,
            'Telefono'=>$request->Telefono,
            'Direccion'=>$request->Direccion,
            'Email'=>$request->Email,
            'Descripcion' =>$request->Descripcion,
        ];
        $voluntary = Voluntary::create($data);
        $request->session()->flash('message', 'Voluntario creado correctamente.');
        return redirect()->route('voluntary.index');
    }
    
    public function show(Voluntary $id)
    {
        $voluntary = Voluntary::find($id);
        $voluntary = $voluntary[0];
        return view('Volun.show')->with('Voluntary', $voluntary);
    }
   
    public function edit($id)
    {  
        $voluntary = Voluntary::find($id);
        if (is_null($voluntary)) {
            return redirect()->route('index'); 
        }
        return view('Volun.createGus')-> with('voluntary', $voluntary);
    }

    public function update(VoluntaryRequest $request, $id)
    {
        $voluntary = Voluntary::find($id);
        $voluntary->Nombre= $request->Nombre;
        $voluntary->Apellido_1= $request->Apellido_1;
        $voluntary->Apellido_2= $request->Apellido_2;
        $voluntary->Edad= $request->Edad;
        $voluntary->Telefono= $request->Telefono;
        $voluntary->Direccion= $request->Direccion;
        $voluntary->Email= $request->Email;
        $voluntary->Descripcion= $request->Descripcion;
        $voluntary->save();
        $request->session()->flash('message', 'Voluntario actualizado correctamente.');
        return redirect()->route('voluntary.index');
    }

    public function createPDF(){
        $data=Voluntary::all();
        View()->share('voluntary', $data);
        $pdf=PDF::loadView('Volun.allVoluntario', $data);
        return $pdf->download('Volun.pdf');
    }
    public function download($id){
        
        $voluntary = Voluntary::find($id);
        view()->share('voluntary', $voluntary);

        return PDF::loadView('Volun.voluntarioPDF', $voluntary)->download("Nombre-$voluntary->nombre, Apellido_1-$voluntary->Apellido_1, Apellido_2-$voluntary->Apellido_2.pdf");
    }

    public function destroy($id)
    {
        Voluntary::find($id)->delete();
        Session()->flash('message', 'Voluntario eliminado correctamente');
        return redirect()->route('voluntary.index');
    }
    
    public function graficarVoluntarios(){
        $voluntaryC = Voluntary::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', 
        date('Y'))->groupBy(\DB::raw("Month(created_at)"))->pluck('count');

        return view('Volun.graficarVoluntarios', compact('voluntaryC'));

    }
}
