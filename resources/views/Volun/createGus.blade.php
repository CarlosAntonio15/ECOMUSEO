<title>Formulario voluntariado</title>
<div style="background-image: url('/img/rueda.jpg'); " >
@extends('layouts.app')
@section('content')
<div class = "container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Voluntario</div>
                <div class="container" data-aos="fade-up">

                    @if(!empty($voluntary))
                        {!! Form::model($voluntary, ['route' => ['voluntary.update', $voluntary->id], 'method'=>'put']) !!}
                    @else
                        {!! Form::open(['route' => 'voluntary.storeGus', 'method'=>'post']) !!}
                    @endif
                    <div class="row mt-5">
                        <div class="col-sm-8 offset-sm-2">  

                            <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            {!! Form::label('Nombre', 'Nombre') !!}
                                            {!! Form::text('Nombre', null, [
                                                'placeholder' => 'Ingrese su nombre',
                                                'class' => 'form-control'.(!empty($errors->first('Nombre')) ? 'is-invalid' : '') ]) 
                                            !!}
                                            @error('Nombre')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
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

                            <div class="col-md-4">
                                <div class="form-group">
                                    <button type="summit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> {{ !empty($voluntary) ? 'Actualizar ' : 'Guardar ' }}
                                    </button>
                                    <a href="{{ route('voluntary.index') }}" class="btn btn-secondary btn-sm">
                                        <i class="fas fa-undo"></i> Atras
                                    </a>
                                </div>
                            </div>
                        </div>    
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection