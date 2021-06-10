<title>Formulario voluntariado</title>
@if( Auth::user()->rol==1 or Auth::user()->rol==2)
@extends('layouts.adminlayout')
@section('content')

<div class = "container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <!--<div class="card">-->
            <div class="card-header"><h4>Lista voluntarios</div></h4>
                <div class="col-sm-12">
                </br>
                    <a href="{{route('createGus')}}" class="btn btn-info">Nuevo voluntario</a>
                    <a href="{{route('administracion')}}" class="btn btn-secondary">Atrás</a>  
                </div>
                <div class="card-body">

                <div class="row">
                    @forelse($Volun as $voluntary)
                        <div class="col-md-4">
                        
                            <div class="card-deck">
                                <div class="col-dm-4 col-voluntary" >
                                    <div class="card voluntary" style="min-width: 18rem; max-width: 18rem;">
                                        <div class="card-body">
                                        <div style="background-image: url('/img/collage.jpeg'); " >
                                            <h5 class="card-footer">
                                                <i class="fa fa-user-circle"></i>
                                                &nbsp;{{ $voluntary-> Nombre }}
                                                &nbsp;{{ $voluntary-> Apellido_1 }}
                                                &nbsp;{{ $voluntary-> Apellido_2 }}
                                            </h5>
                                        </div>
                                        
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><i class="fa fa-birthday-cake">&nbsp;</i>{{ $voluntary->Edad }}</li>
                                            <li class="list-group-item"><i class="fa fa-phone"></i>&nbsp;{{ $voluntary->Telefono }}</li>
                                            <li class="list-group-item" 
                                                    style="display:block;text-overflow: ellipsis;width: 200px;overflow: hidden; white-space: nowrap;">
                                                        <i class="fa fa-map-marked-alt"></i>&nbsp;{{ $voluntary->Direccion }}</li>
                                            <li class="list-group-item"><i class="fa fa-paper-plane"></i>&nbsp;{{ $voluntary->Email }}</li>
                                            <li class="list-group-item"><i class="fa fa-address-card"></i> &nbsp;{{ $voluntary->Descripcion }}</li>
                                        </ul>

                                        <div class="card-footer">
                                            <a href="{{ route('voluntary.show', [$voluntary->id]) }}" class="btn btn-primary"><i class="fa fa-info-circle"></i>&nbsp;Ver más</a>
                                            <a href="{{ route('voluntary.edit', [$voluntary->id]) }}" class="btn btn-warning"><i class="fa fa-edit"></i>&nbsp;Editar</a>
                                            <form action="/voluntario/delete/{{ $voluntary->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')</br>
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp;Eliminar</button>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                    @empty
                        <h4> No existen voluntarios agregados. </h4> 
                    @endforelse
                </div>
            </div>
            <!--</div>-->
        </div>
    </div>
</div>

@endsection

@endif
@if( Auth::user()->rol==3 )


<br><br><br><br><br><br>



    <div class="card">

        <div class="card-content">

            <div class="card-body">

                <div class="form-body">

                    <div class="col-12">

                        <div class="form-group">
                            <br>
                            <h2 style="color: red" class="card-title">Acceso denegado, comuníquese con el administrador. </h2>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>



@endif