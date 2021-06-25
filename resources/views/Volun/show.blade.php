<title>Información detallada voluntario</title>
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
                                    <a class="nav-link active" id="v-pills-voluntary-tab" data-toggle="pill" href="#v-pills-voluntary" role="tab" aria-controls="true">Voluntario</a>
                                    <a class="nav-link" id="v-pills-contact-tab" data-toggle="pill" href="#v-pills-contact" role="tab" aria-controls="false">Contacto</a>
                                    <a class="nav-link" id="v-pills-descrition-tab" data-toggle="pill" href="#v-pills-descrition" role="tab" aria-controls="false">Descripción</a>

                                    
                                </div>
                            </div>
                            <div class="col-9">
                                
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane show active" id="v-pills-voluntary" role="tabpanel" aria-labelledby="v-pills-voluntary-tab">
                                        <table class="table table-bordered table-hover">
                                            <tbody>
                                                <tr>
                                                <th>Nombre del Voluntario</th>
                                                    <td> {{ $Voluntary->Nombre }} 
                                                        &nbsp;{{ $Voluntary-> Apellido_1 }}
                                                        &nbsp;{{ $Voluntary-> Apellido_2 }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                <th >Edad</th>
                                                    <td> {{ $Voluntary->Edad }} </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="tab-pane" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
                                        <table class="table table-bordered table-hover">
                                            <tbody>
                                                <tr>
                                                    <th >Teléfono</th>
                                                    <td>{{ $Voluntary->Telefono }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Dirección</th>
                                                    <td>{{ $Voluntary->Direccion }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Correo Electrónico</th>
                                                    <td> {{ $Voluntary->Email }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="v-pills-descrition" role="tabpanel" aria-labelledby="v-pills-descrition-tab">
                                        <table class="table table-bordered table-hover">
                                            <tbody>
                                                <tr>
                                                    <th>Descripción</th>
                                                    <td>{{ $Voluntary->Descripcion }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <a href="{{route('voluntary.index')}}"
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