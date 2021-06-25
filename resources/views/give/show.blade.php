<title>Información detallada</title>
@if( Auth::user()->rol==1 or Auth::user()->rol==2)
@extends('layouts.adminlayout')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Informacion detallada <small>Voluntario</small></h2>
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
                                                    <th>Fecha realizada la donación</th>
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
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <a href="{{route('give.index')}}"
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