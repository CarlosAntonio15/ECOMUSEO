<title>Información detallada reservación</title>
@extends('layouts.app')
@section('content')
<div class = "container">
<div class="row justify-content-center">
<div class="col-sm-12">
<div class="card">
<div class="card-header"><h4>Información detallada</h4></div>
<div class="card-body">

<div class="row">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-client-tab" data-toggle="pill" href="#v-pills-client" role="tab" aria-controls="true">Cliente</a>
                    <a class="nav-link" id="v-pills-reservation-tab" data-toggle="pill" href="#v-pills-reservation" role="tab" aria-controls="false">Reservación</a>
                    <a class="nav-link" id="v-pills-contact-tab" data-toggle="pill" href="#v-pills-contact" role="tab" aria-controls="false">Descripción</a>

                    <a href="{{route('reservation.index')}}"
                        class="btn btn-secondary btn-sm"><i class="fas fa-undo"></i> Atrás
                    </a>
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
                            </tbody>
                        </table>

                    </div>
                    <div class="tab-pane" id="v-pills-reservation" role="tabpanel" aria-labelledby="v-pills-reservation-tab">
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
                                    <th>Cantidad de adultos</th>
                                    <td>{{ $Reservation->adultQuantity }}</td>
                                </tr>
                                <tr>
                                    <th>Cantidad de niños</th>
                                    <td> {{ $Reservation->childrenQuantity }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
                        <table class="table table-bordered table-hover">
                            <tbody>
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
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection