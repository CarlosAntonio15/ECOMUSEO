<title>Formulario reservaciones</title>
@if( Auth::user()->rol==1 or Auth::user()->rol==2)
@extends('layouts.adminlayout')
@section('content')
<div class = "container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header"><h4>Lista reservaciones</h4>
                    <a href="{{route('reservation.create')}}" class="btn btn-info">Nueva reservación</a>
                    <a href="{{route('administracion')}}" class="btn btn-secondary">Atrás</a>
                </div>

                <div class="card-body">

                    <div class="row">

                        @forelse($reservation as $reservation)


                            <div class="col-md-4">
                            
                                <div class="card-deck">
                                    <div class="col-dm-4 col-reservation" >
                                        <div class="card reservation" style="min-width: 18rem; max-width: 18rem;">
                                            
                                            <div class="card-body">
                                                <h5 class="card-footer">
                                                    <i class="fa fa-user-circle"></i>
                                                    &nbsp;{{ $reservation-> name }}
                                                    &nbsp;{{ $reservation-> lastname }}
                                                </h5>
                                            </div>
                                            
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><i class="fa fa-birthday-cake"></i>&nbsp;{{ $reservation->reservationDate }}</li>
                                                <li class="list-group-item"><i class="fa fa-phone"></i>&nbsp;{{ $reservation->reservationHour }}</li>
                                                <li class="list-group-item" 
                                                    style="display:block; text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">
                                                        <i class="fas fa-map-marked-alt"></i>&nbsp;{{ $reservation->adultQuantity }}</li>
                                                <li class="list-group-item"><i class="fa fa-paper-plane"></i>&nbsp;{{ $reservation->childrenQuantity }}</li>
                                                <li class="list-group-item"><i class="fa fa-users"></i>&nbsp;{{ $reservation->tourType }}</li>
                                                <li class="list-group-item"><i class="fa fa-address-card"></i> &nbsp;{{ $reservation->email }}</li>
                                                <li class="list-group-item"><i class="fa fa-address-card"></i> &nbsp;{{ $reservation->phone }}</li>
                                                <li class="list-group-item"><i class="fa fa-donate"></i> &nbsp;{{ $reservation->status }}</li>
                                            </ul>

                                            <div class="card-footer">
                                                <a href="{{route('reservation.show',[$reservation->id])}}" class="btn btn-primary">Ver más</a>
                                                <a href="{{route('reservation.edit',[$reservation->id])}}" class="btn btn-warning" class="margin:25px;">Editar</a>
                                                <form action="/reservaciones/delete/{{$reservation->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')</br>
                                            <button class='btn btn-danger'><i class="fa fa-trash" class="margin:25px;"></i>&nbsp;Eliminar</button>  
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