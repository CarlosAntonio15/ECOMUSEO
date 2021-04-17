@extends('layouts.main')
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header">Donaciones</div>

                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th width="20px">ID</th>
                                
                                <th >Nombre</th>
                                <th >Apellido</th>
                                <th >Edad</th>
                                <th >Teléfono</th>
                                <th >Dirección</th>
                                <th >Email</th>
                                <th >Cantidad</th>
                                <th >Descripción</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                    
                        @foreach($voluntaryN as $voluntary)
                            <tr class = "text-center">
                                <td>{{ $voluntary->id }}</td>
                                <td>{{ $voluntary->Nombre }}</td>
                                <td>{{ $voluntary-> Apellido_1 }}&nbsp;{{ $voluntary-> Apellido_2 }}</td>
                                <td>{{ $voluntary->Edad }}</td>
                                <td>{{ $voluntary->Telefono }}</td>
                                <td>{{ $voluntary->Direccion }}</td>
                                <td>{{ $voluntary->Email }}</td>
                                <td>{{ $voluntary->Cantidad }}</td>
                                <td>{{ $voluntary->Descripcion }}</td>
                                
                               
                             
                                <td> 
                              
                                    <a href="{​​{​​ route('voluntary.show', $Voluntary->id) }​​}​​" class="btn btn-success">Ver</a>
                                 
                                </td>
                                <td> 
                                <a href="{​​{​​ route('voluntary.edit', $Voluntary->id) }​​}​​"class="btn btn-warning">Editar</a>
                                </td>
                                <td> 
                                    <form action="{​​{​​route('voluntary.destroy', $Voluntary->id)}​​}​​" method='POST'>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td> 
                            </tr>


                        @endforeach
                        </table>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection