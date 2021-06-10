<title>Formulario donaciones</title>
@if( Auth::user()->rol==1 or Auth::user()->rol==2)
@extends('layouts.adminlayout')
    @section('content')
        <?php $page='give';?>
        <div class = "container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    
                    <div class="card">
                        <div class="card-header"><h4>Lista donaciones</div></h4>
                            <div class="col-md-12">
                                </br>
                                <a href="{{route('give.create')}}" class="btn btn-info">Nuevo donaciones</a>
                                <a href="{{route('administracion')}}" class="btn btn-secondary">Atrás</a>
                            
                            </div>

                            <div class="card-body">

                                <div class="row">
                                    @forelse($give as $give)
                                        <div class="col-md-4">
                                            <div class="card-deck">
                                                <div class="col-dm-4 col-voluntary" >
                                                    <div class="card voluntary" style="min-width: 18rem; max-width: 18rem;">
                                                        <div class="card-body">
                                                            <div style="background-image: url('/img/collage.jpeg'); " >
                                                                <h5 class="card-footer">
                                                                    <i class="fas fa-user-circle"></i>
                                                                    &nbsp;{{ $give-> name }}
                                                                    &nbsp;{{ $give-> lastname }}
                                                                </h5>
                                                            </div>
                                                        
                                                            <ul class="list-group list-group-flush">
                                                                <li class="list-group-item"><i class="fas fa-birthday-cake">&nbsp;</i>{{ $give->donationType }}</li>
                                                                <li class="list-group-item"><i class="fas fa-phone"></i>&nbsp;{{ $give->description }}</li>
                                                                <li class="list-group-item" 
                                                                    style="display:block;text-overflow: ellipsis;width: 200px;overflow: hidden; white-space: nowrap;">
                                                                        <i class="fas fa-map-marked-alt"></i>&nbsp;{{ $give->phone }}</li>
                                                            </ul>

                                                            <div class="card-footer">
                                                                <a href="{{ route('give.show', [$give->id]) }}" class="btn-sm btn-primary"><i class="fas fa-info-circle"></i>&nbsp;Ver más</a>
                                                                <a href="{{ route('give.edit', [$give->id]) }}" class="btn-sm btn-warning"><i class="fas fa-edit"></i>&nbsp;Editar</a>
                                                                <form action="/give/delete/{{ $give->id }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')</br>
                                                                    <button class="btn-danger btn-sm"><i class="fas fa-trash"></i>&nbsp;Eliminar</button>
                                                                </form>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    @empty
                                        <h4> No existen donaciones agregadas. </h4> 
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
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