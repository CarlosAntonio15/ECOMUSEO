<title>Información detallada reservación</title>
@if( Auth::user()->rol==1 or Auth::user()->rol==2)
@extends('layouts.adminlayout')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Informacion detallada <small>Reservación</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-3">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-client-tab" data-toggle="pill" href="#v-pills-client" role="tab" aria-controls="true">Cliente</a>
                                <a class="nav-link" id="v-pills-reservation-tab" data-toggle="pill" href="#v-pills-reservation" role="tab" aria-controls="false">Cantidad de personas</a>
                                <a class="nav-link" id="v-pills-contact-tab" data-toggle="pill" href="#v-pills-contact" role="tab" aria-controls="false">Descripción</a>
                            </div>
                        </div>
                        <div class="col-9">
                            
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane show active" id="v-pills-client" role="tabpanel" aria-labelledby="v-pills-client-tab">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                            <tr>
                                                <th>Nombre del cliente</th>
                                                <td>&nbsp;{{ $Reservation-> name }}
                                                    &nbsp;{{ $Reservation-> lastname }}
                                                </td>                                
                                            </tr>
                                            <tr>
                                                <th>Identificación del cliente</th>
                                                <td>{{ $Reservation->identification }}</td>
                                            </tr>
                                            <tr>
                                                <th>Correo electrónico</th>
                                                <td> {{ $Reservation->email }} </td>
                                            </tr>
                                            <tr>
                                                <th>Teléfono</th>
                                                <td>{{ $Reservation->phone }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="tab-pane" id="v-pills-reservation" role="tabpanel" aria-labelledby="v-pills-reservation-tab">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                            
                                            <tr>
                                                <th>Cantidad de adultos</th>
                                                <td>{{ $Reservation->adultQuantity }}</td>
                                            </tr>
                                            <tr>
                                                <th>Cantidad de niños</th>
                                                <td> {{ $Reservation->childrenQuantity }}</td>
                                            </tr>
                                            <tr>
                                                <th>Precio total</th>
                                                <td> {{ $Reservation->total }}</td>
                                            </tr>
                                            <tr>
                                                <th>Estado de pago</th>
                                                <td> {{ $Reservation->status }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                            <tr>
                                                <th>Fecha reservada</th>
                                                <td> {{ $Reservation->reservationDate }} </td>
                                            </tr>
                                            <tr>
                                                <th>Hora reservada</th>
                                                <td>{{ $Reservation->reservationHour }}</td>
                                            </tr>
                                            <tr>
                                                <th>Tipo de tour</th>
                                                <td> {{ $Reservation->tourType }} </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <a href="{{route('reservation.index')}}"
                            class="btn btn-secondary btn-sm"><i class="fa fa-undo"></i> Atrás
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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