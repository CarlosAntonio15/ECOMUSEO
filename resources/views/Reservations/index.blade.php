<title>Lista reservaciones</title>
@if( Auth::user()->rol==1 or Auth::user()->rol==2)
@extends('layouts.adminlayout')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Lista de reservaciones </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="x_content">
                        <div class="container" data-aos="fade-up">
                            <a href="{{route('reservation.create')}}" class="btn-sm btn-primary"><i class="fa fa-plus-circle"></i> Reservación</a>
                            <a class="btn-sm btn-info" href="{{ url('/reservaciones/PDF') }}"><i class="fa fa-file-pdf-o"></i> Exportar PDF</a>
                            <a href="{{route('reservation.grafica')}}" class="btn-sm btn-dark"><i class="fa fa-line-chart"></i> Gráficas</a>
                       
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    @if(Session::has('message'))
                        <div class="alert alert-info alert-dismissible " role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button>
                            {{ Session::get('message') }}
                        </div>
                    @endif
                </div>
                <div class="x_content">
                    <div class="card-body">

                        <div class="row">

                            @forelse($reservation as $reservation)


                                <div class="col-md-4">
                                
                                    <div class="card-deck">
                                        <div class="col-dm-4 col-reservation" >
                                            <div class="card reservation" style="min-width: 16rem; max-width: 16rem;">
                                                
                                                <div class="card-body">
                                                    <h4 class="card-header">
                                                        <i class="fa fa-user"></i>
                                                        &nbsp;{{ $reservation-> name }}
                                                        &nbsp;{{ $reservation-> lastname }}
                                                    </h4>
                                                
                                                
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item"><i class="fa fa-calendar"></i>
                                                            &nbsp;{{ $reservation->reservationDate }}
                                                            <i class="fa fa-clock-o"></i> &nbsp;{{ $reservation->reservationHour }}
                                                        </li>
                                                        <li class="list-group-item" 
                                                            style="display:block; text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">
                                                                <i class="fa fa-female"></i><i class="fa fa-male"></i>&nbsp;{{ $reservation->adultQuantity }}
                                                                <i class="fa fa-child"></i>&nbsp;{{ $reservation->childrenQuantity }}
                                                        </li>
                                                        <li class="list-group-item">
                                                            <i class="fa fa-tree"></i>&nbsp;{{ $reservation->tourType }}
                                                        </li>
                                                        <li class="list-group-item"><i class="fa fa-phone"></i> &nbsp;{{ $reservation->phone }}</li>
                                                        <li class="list-group-item"><i class="fa fa-tags"></i> &nbsp;{{ $reservation->status }}</li>
                                                    </ul>

                                                    <div class="card-footer">
                                                        <a href="{{route('reservation.show',[$reservation->id])}}" class="btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                                        <a href="{{route('reservation.edit',[$reservation->id])}}" class="btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                                        <a class="btn-sm btn-info" href="{{ url('/reservaciones/PDF', $reservation->id) }}"><i class="fa fa-file-pdf-o"></i></a>
                                                        <form action="/reservaciones/delete/{{$reservation->id}}" class="d-inline formulario-eliminar" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn-sm btn-danger "><i class="fa fa-trash"></i></button>  
                                                        </form>
                                                    </div>
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
@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>

        $('.formulario-eliminar').submit(function(e){
            e.preventDefault();
            Swal.fire({
            title: 'Esta seguro?',
            text: "Esta reservacion se eliminara definitivamente",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar!',
            cancelButtonText: 'Cancelar',
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Eliminado!',
                'La reservación a sido eliminada.',
                'success'
                )
                this.submit();
            }
        })
    });
    
    </script>
@endsection
@endif
@if( Auth::user()->rol==3 )
    @section('content')
        <!-- page content -->
        <div class="col-md-12">
            <div class="col-middle">
                <div class="text-center text-center">
                    <h1 class="error-number">403</h1>
                    <h2>Accesso denegado</h2>
                    <p>Se requiere autenticación completa para acceder a este recurso. <a href="{{ route('login') }}">Inicie sesión</a>
                    </p>
                    <div class="mid_center">
                        <h3>Ecomuseo</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
    @endsection
@endif