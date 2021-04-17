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
                <a class="nav-link active" id="v-pills-voluntary-tab" data-toggle="pill" href="#v-pills-voluntary" role="tab" aria-controls="true">Voluntario</a>
                <a class="nav-link" id="v-pills-contact-tab" data-toggle="pill" href="#v-pills-contact" role="tab" aria-controls="false">Contacto</a>
                <a class="nav-link" id="v-pills-descrition-tab" data-toggle="pill" href="#v-pills-descrition" role="tab" aria-controls="false">Descripción</a>

                <a href="{{route('voluntary.index')}}"
                    class="btn btn-secondary btn-sm"><i class="fas fa-undo"></i> Atrás
                </a>
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
                                <th>Edad</th>
                                <td> {{ $Voluntary->Edad }} </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="tab-pane" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <th>Teléfono</th>
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
    
   </div>
    </div>
    </div>
    </div>
    </div>
@endsection