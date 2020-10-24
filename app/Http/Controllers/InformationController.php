<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Information;
use App\Imginforation;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemCreateRequest;
use App\Http\Requests\ItemUpdateRequest;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage; 
use Illuminate\Support\Str; 
use File; 

class InformationController extends Controller
{
     // Leer Registros (Read) 
     public function index()
     {
      $information = Information::select('id', 'name', 'image', 'url')->with('imageinformation:name')->get();
  
         //$ib = Bicicletas::find(3)->imagenesbicicletas;
  
         //dd($ib);
  
         // $imagenes = Bicicletas::find(3)->imagenesbicicletas;
  
         return view('admin.information.index', compact('information')); 
     }

     


    // Crear un Registro (Create) 
    public function create()
    {
        $information = Information::all();
        return view('admin.information.create', compact('information'));
    }
 


    // Proceso de Creación de un Registro 
    public function store(ItemCreateRequest $request)
    {
        // dd($request->all());
        $information= new Information;
        $information->name = $request->name;
        $information->image = date('dmyHi');
        $information->url = Str::slug($request->name, '-');  // Acá generamos la URL amigable a partir del nombre y la guardamos en la Base de Datos
 
        $information->save();
 
        $ci = $request->file('img');
 
        // Validamos que el nombre y el formato de imagen esten presentes, tu puedes validar mas campos si deseas 
        $this->validate($request, [
 
            'name' => 'required',
            'img.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
 
        ]);        
 
        // Recibimos una o varias imágenes y las guardamos en la carpeta 'uploads'
        foreach($request->file('img') as $image)
            {
                // dd($image->getClientOriginalExtension());
                $image = $image->getClientOriginalName();
                $format = $image->getClientOriginalExtension();
                $image->move(public_path().'/uploads/', $image);
                
 
                // Guardamos el nombre de la imagen en la tabla 'img_bicicletas'
                DB::table('img_information')->insert(
     [
      'name' => $image, 
      'format' => $format,
      'id_information' => $information->id,
      'created_at' => date("Y-m-d H:i:s"),
      'updated_at' => date("Y-m-d H:i:s")
     ]
 );
 
            }         
 
        // Redireccionamos con mensaje 
        return redirect('admin/information')->with('message','Guardado Satisfactoriamente !');
}
 
    // Leer un Registro específico (Leer)
    public function show($id)
    {
        //
    }
 


    //  Edit un registro (Update)
    public function edit($id)
    {
        $information = Information::find($id);
 
        $image = Information::find($id)->imageinformation;
 
        return view('admin/information.edit', compact('image'), ['information' => $information]);
    }
 
    // Proceso de Actualización de un Registro (Update)
    public function update(ItemUpdateRequest $request, $id)
    {        
        $information= Information::find($id);
        $information->name = $request->name;
        $information->save();
 
        $ci = $request->file('img');
 
        // Si la variable '$ci' no esta vacia, actualizamos el registro con las nuevas imágenes
        if(!empty($ci)){
 
            // Validamos que el nombre y el formato de imagen esten presentes, tu puedes validar mas campos si deseas 
            $this->validate($request, [
 
                'name' => 'required',
                'img.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
 
            ]);        
 
            // Recibimos una o varias imágenes y las actualizamos 
            foreach($request->file('img') as $image)
                {
                    $image = $image->getClientOriginalName();
                    $format = $image->getClientOriginalExtension();
                    $image->move(public_path().'/uploads/', $image);
 
                    // Actualizamos el nuevo nombre de la(s) imagen(es) en la tabla 'img_bicicletas'
                    DB::table('img_information')->insert(
                        [
                            'name' => $image, 
                            'format' => $format,
                            'id_information' => $information->id,
                            'created_at' => date("Y-m-d H:i:s"),
                            'updated_at' => date("Y-m-d H:i:s")
                        ]
                    );
 
                } 
 
        }
 
        // Redireccionamos con mensaje  
        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('admin/information');
    }
 
    // Eliminar un Registro
    public function delete($id)
    {
        $information = Information::find($id);
 
        // Selecciono las imágenes a eliminar 
        $image = DB::table('img_information')->where('id_information', '=', $id)->get();        
        $imgfrm = $image->implode('name', ',');  
        //dd($imgfrm);        
 
        // Creamos una lista con los nombres de las imágenes separadas por coma
        $image = explode(",", $imgfrm);
        
        // Recorremos la lista de imágenes separadas por coma
        foreach($image as $image){
            
            // Elimino la(s) imagen(es) de la carpeta 'uploads'
            $dirimgs = public_path().'/uploads/'.$image;
            
            // Verificamos si la(s) imagen(es) existe(n) y procedemos a eliminar  
            if(File::exists($dirimgs)) {
                File::delete($dirimgs);                
            }
 
        }    
 
        
        // Borramos el registro de la tabla 'bicicletas'
        Information::destroy($id); 
 
        // Borramos las imágenes de la tabla 'img_bicicletas' 
        $information->imageinformation()->delete();
 
        // Redireccionamos con mensaje 
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/information');
    }
 
    // Eliminar imagen de un Registro
    public function deleteimage($id, $bid)
    {
        $information = Imginformation::find($id);
 
        $bi = $bid;
 
        // Elimino la imagen de la carpeta 'uploads'
        $image = Imginformation::select('name')->where('id', '=', $id)->get();
        $imgfrm = $image->implode('name', ', ');
        //dd($imgfrm);
        Storage::delete($imgfrm);
 
        Imginformation::destroy($id);
 
        // Redireccionamos con mensaje 
        Session::flash('message', 'Imagen Eliminada Satisfactoriamente !');
        return Redirect::to('admin/information/edit/'.$bi.'');
    }
 
    // Detalles del Producto
    public function details($id)
    {
        // Seleccionar un registro por su 'id' 
        $information = Information::where('id','=', $id)->firstOrFail();
 
        // Seleccionamos las imágenes por su 'id' 
        $image = Information::find($id)->imageinformation;
 
        return view('admin/information.details', compact('information', 'image'));
    }

    // $input = $request->all();
    // $user = Auth::user();
    // if($file = $request->file('photo_id')) { 
    //     $name = time() . $file->getClientOriginalName(); 
    //     $file->move('images', $name); 
    //     $photo = Photo::create(['file'=>$name]); 
    //     $input['photo_id'] = $photo->id; 
       
    // }    
    // $user->post()->create($input);  


}
