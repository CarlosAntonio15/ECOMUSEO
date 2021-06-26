<title>Formulario voluntariado</title>
@if( Auth::user()->rol==1 or Auth::user()->rol==2)
@extends('layouts.adminlayout')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Voluntarios <small>Formulario</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="container" data-aos="fade-up">
                @if(!empty($voluntary))
                    {!! Form::model($voluntary, ['route' => ['voluntary.update', $voluntary->id], 'method'=>'put']) !!}
                @else
                    {!! Form::open(['route' => 'voluntary.storeGus', 'method'=>'post']) !!}
                @endif
                <div class="row mt-8">
                    <div class="col-sm-8 offset-sm-2">  

                        <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('Nombre', 'Nombre') !!}
                                        {!! Form::text('Nombre', null, [
                                            'placeholder' => 'Ingrese su nombre',
                                            'class' => 'form-control' ]) 
                                        !!}
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::Label('Apellido_1', 'Primer apellido') !!}
                                        {!! Form::text('Apellido_1', null, ['placeholder' => 'Ingresa su primer apellido', 'class' => 'form-control' ]) !!}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::Label('Apellido_2', 'Segundo apellido') !!}
                                        {!! Form::text('Apellido_2', null, ['placeholder' => 'Ingresa su segundo apellido', 'class' => 'form-control' ]) !!}
                                    </div>
                                </div>
                        </div>

                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::Label('Edad', 'Edad') !!}
                                        {!! Form::number('Edad', null, ['placeholder' => 'Ingresa su edad', 'class' => 'form-control' ]) !!}
                                    </div>
                                </div>
                        


                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::Label('Telefono', 'Teléfono') !!}
                                        {!! Form::number('Telefono', null, ['placeholder' => 'Ingresa su teléfono', 'class' => 'form-control' ]) !!}
                                    </div>
                                </div>      
                        </div>


                        <div class="row">      
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::Label('Direccion', 'Dirección') !!}
                                        {!! Form::text('Direccion', null, ['placeholder' => 'Ingresa su dirección', 'class' => 'form-control' ]) !!}
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::Label('Email', 'Correo electrónico') !!}
                                        {!! Form::text('Email', null, ['placeholder' => 'Ingresa un correo electrónico', 'class' => 'form-control' ]) !!}
                                    </div>
                                </div>
                        </div>
                                
                        <div class="row"> 
                                <div class="col-md-9">
                                    <div class="form-group">
                                        {!! Form::Label('Descripcion', 'Descripción') !!}
                                        {!! Form::textarea('Descripcion', null, ['placeholder' => 'Ingresa una descripción', 'class' => 'form-control' ]) !!}
                                    </div>
                                </div>
                        </div> 
                        <div class="ln_solid"></div>
                        <div class="form-group col-md-12">
                            <button type="summit" class="btn-md btn-success">
                                <i class="fa fa-save"></i> {{ !empty($voluntary) ? 'Actualizar ' : 'Guardar ' }}
                            </button>
                            <a href="{{ route('voluntary.index') }}" class="btn-sm btn-secondary">
                                <i class="fa fa-reply"></i> Atrás
                            </a>
                        </div>
                    </div>    
                </div>
                {!! Form::close() !!}
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