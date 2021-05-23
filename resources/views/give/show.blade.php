<title>Información detallada</title>
@extends('layouts.app')
@section('content')

<div style="background-image: url('/img/rueda.jpg'); " >
    <div class = "container">
        </br></br>
        <div class="row justify-content-center">
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-header"><h4 >Información detallada</h4></div>
                        <div style="background-image: url('/img/rueda.jpg'); " >
                            </br>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-3">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="v-pills-donation-tab" data-toggle="pill" href="#v-pills-donation" role="tab" aria-controls="true">Donante</a>
                                            <a class="nav-link" id="v-pills-descritions-tab" data-toggle="pill" href="#v-pills-descritions" role="tab" aria-controls="false">Descripción</a>
                                            <a class="nav-link" id="v-pills-contacto-tab" data-toggle="pill" href="#v-pills-contacto" role="tab" aria-controls="false">Contacto</a>
                                        </div>
                                    </div>

                                    <div class="col-9">
                                        
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane show active" id="v-pills-donation" role="tabpanel" aria-labelledby="v-pills-donation-tab">
                                                <table class="table table-bordered table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <th>Nombre del Donante</th>
                                                            <td> 
                                                                {{ $give->name }}&nbsp;
                                                                {{ $give->lastname }}
                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Identificación</th>
                                                            <td>
                                                                {{ $give->id }}
                                                            </td>
                                                        </tr>
                                            
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="tab-pane" id="v-pills-descritions" role="tabpanel" aria-labelledby="v-pills-descritions-tab">
                                                <table class="table table-bordered table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <th>Tipo de donación</th>
                                                            <td>{{ $give-> donationType }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Cantidad de donación</th>
                                                            <td>{{ $give-> quantity }}&nbsp;</td>
                                                        </tr>
                                                    
                                                        <tr>
                                                            <th>Descripción</th>
                                                            <td>{{ $give-> description}}</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <th>Fecha relalizada la donación</th>
                                                            <td>{{ $give-> currentDate}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="tab-pane" id="v-pills-contacto" role="tabpanel" aria-labelledby="v-pills-contacto-tab">
                                                <table class="table table-bordered table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <th>Teléfono</th>
                                                            <td>{{ $give-> phone}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Correo Electrónico</th>
                                                            <td>{{ $give-> mail}} </td>
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
            </br></br></br></br></br></br></br></br></br></br></br></br>
        </div>
    </div>
</div>
@endsection