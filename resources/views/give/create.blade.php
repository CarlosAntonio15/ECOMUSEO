<title>Formulario donaciones</title>
@if( Auth::user()->rol==1 or Auth::user()->rol==2)
@extends('layouts.adminlayout')
@section('title','Create Donation')
@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Donaciones <small>Formulario</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(!empty($give))
                    {!! Form::model($give, ['route' => ['give.update', $give->id], 'method'=>'put']) !!}
                @else
                    {!! Form::open(['route' => 'give.store', 'method'=>'post']) !!}
                @endif
            
           
          
                    <div class="row mt-12">
                        <div class="col-sm-8 offset-sm-2">
            
                            <div class="form-group">
                                <label for="Nombre"><h5>Ingrese los datos que se le sean solicitados para procesar su donacion..</h5></label>
                            </div>
                  
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    {!! Form::label('name', 'Nombre ') !!}
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::Label('lastname', 'Primer apellido') !!}
                                        {!! Form::text('lastname', null, ['class' => 'form-control' ]) !!}
                                    </div>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <h4> {!! Form::Label('donationType', 'Donacion a escoger:') !!}</h4>
                                            <h2>{!! Form::radio('donationType', 'Monetaria') !!} Monetaria</h2>
                                            <h2>{!! Form::radio('donationType', 'Alimenticia') !!} Alimenticia</h2>
                                            <h2>{!! Form::radio('donationType', 'Material') !!} Material</h2>
                    
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            {!! Form::Label('quantity', 'Edad') !!}
                                            {!! Form::number('quantity', null, ['class' => 'form-control' ]) !!}
                                        </div>
                                    </div>

                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="currentDate"><h4>Fecha</h4></label>
                                            <input type="date" name = "currentDate" id = "currentDate" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        {!! Form::Label('phone', 'Teléfono') !!}
                                        {!! Form::number('phone', null, ['class' => 'form-control' ]) !!}
                                    </div>
                                </div>
                

                                <div class="col-md-7">
                                    <div class="form-group">
                                        {!! Form::Label('mail', 'Correo electrónico') !!}
                                        {!! Form::text('mail', null, ['placeholder' => 'Ingresa un correo electrónico', 'class' => 'form-control' ]) !!}  </div>
                                </div>

                    
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {!! Form::Label('description', 'Descripción') !!}
                                        {!! Form::textarea('description', null, ['class' => 'form-control' ]) !!}
                                    </div>
                                </div>
                            </div>
                
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <button type = "submit" class = "btn btn-success"><i class="fa fa-save"></i> Procesar solicitud</button>
                                
                                <input type="button" class = "btn btn-secondary" onclick="history.back()" name="Atrás" value="Atrás">
                            </div>
                  
                        </div>
                    </div>
                </div>

                <br/>
            {!! Form::close() !!}
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