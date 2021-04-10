<title>Formulario donaciones</title>
@if( Auth::user()->rol==1 or Auth::user()->rol==2)
@extends('layouts.app')
@section('content')

    <?php $page='donation';?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Donaciones</h4>
                        
                        <a href="{{ route('donation.create') }}" class="btn btn-info float-rigth">
                            <i class="fas fa-plus"></i>Nueva donación
                        </a>
                        <a href="{{route('administracion')}}" class="btn btn-secondary">Atrás</a>
                    </div>

                    <div class="row">
        @forelse($donationN as $donation)
            <div class="col-md-4">
            
                <div class="card-deck">
                    <div class="col-dm-4 col-voluntary" >
                        <div class="card voluntary" style="min-width: 18rem; max-width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-footer">
                                    <i class="fas fa-user-circle"></i>
                                    &nbsp;{{ $donation-> name }}
                                    &nbsp;{{ $donation-> lastname }}
                                </h5>
                            </div>
                            
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-birthday-cake">&nbsp;</i>{{ $donation->donationType }}</li>
                                <li class="list-group-item"><i class="fas fa-phone"></i>&nbsp;{{ $donation->phone }}</li>
                                <li class="list-group-item"><i class="fas fa-paper-plane"></i>&nbsp;{{ $donation->mail }}</li>
                                <li class="list-group-item"><i class="far fa-address-card"></i> &nbsp;{{ $donation->description }}</li>
                            </ul>

                            <div class="card-footer">
                                <a href="{{ route('donation.show', [$donation->id]) }}" 
                                    class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i>&nbsp;Ver más</a>
                                <a href="{{ route('donation.edit', [$donation->id]) }}" 
                                    class="btn btn-warning btn-sm"><i class="fas fa-edit"></i>&nbsp;Editar</a>
                                <form action="/donaciones/delete/{{ $donation->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')</br>
                                        <button class="btn btn-danger">
                                            <i class="fas fa-trash"></i>&nbsp;Eliminar
                                        </button>
                                </form>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
        @empty
            <h4> No existen donaciones agregados. </h4> 
        @endforelse
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

