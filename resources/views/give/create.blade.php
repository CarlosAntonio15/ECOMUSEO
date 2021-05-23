<title>Formulario donaciones</title>
<div style="background-image: url('/img/rueda.jpg'); " >
@extends('layouts.app')
@section('content')
<div class = "container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Donaciones</div>
                <div class="container" data-aos="fade-up">

                    @if(!empty($give))
                        {!! Form::model($give, ['route' => ['give.update', $give->id], 'method'=>'put']) !!}
                    @else
                        {!! Form::open(['route' => 'give.store', 'method'=>'post']) !!}
                    @endif
                    <div class="row mt-5">
                        <div class="col-sm-8 offset-sm-2">  

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::Label('id', 'Identificación') !!}
                                        {!! Form::number('id', null, ['placeholder' => 'Ingresa su número de Identificación', 'class' => 'form-control' ]) !!}
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('name', 'Nombre') !!}
                                        {!! Form::text('name', null, [
                                            'placeholder' => 'Ingrese su nombre',
                                            'class' => 'form-control'.(!empty($errors->first('Nombre')) ? 'is-invalid' : '') ]) 
                                        !!}
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::Label('lastname', 'Apellidos') !!}
                                        {!! Form::text('lastname', null, ['placeholder' => 'Ingresa sus apellidos', 'class' => 'form-control' ]) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">

                                    <h5 style="color:  rgb(243, 236, 236)" align="center"> {!! Form::Label('donationType', 'Donacion a escoger:') !!}</h5>
                                        <br>
                                        <h5 style="color:  rgb(243, 236, 236)" align="center">   {!! Form::radio('donationType', 'Monetaria') !!} Monetaria</h5>
                                        <h5 style="color:  rgb(243, 236, 236)" align="center"> {!! Form::radio('donationType', 'Alimenticia') !!} Alimenticia</h5>
                                        <h5 style="color:  rgb(243, 236, 236)" align="center">{!! Form::radio('donationType', 'Material') !!} Material</h5>
                                    
                                    </div>
                                </div>

                            
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::Label('quantity', 'Cantidad a donar') !!}
                                        {!! Form::number('quantity', null, ['placeholder' => 'Ingresa su donación', 'class' => 'form-control' ]) !!}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row"> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {!! Form::Label('description', 'Descripción') !!}
                                        {!! Form::textarea('description', null, ['placeholder' => 'Breve descripción de su donación', 'class' => 'form-control' ]) !!}
                                    </div>
                                </div>
                            </div> 

                            <div class="row">      
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5 style="color:  rgb(243, 236, 236)" align="center">{!! Form::Label('currentDate', 'Fecha de donación') !!}</h5>
                                            {!! Form::date('currentDate', \Carbon\Carbon::now()) !!}
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::Label('phone', 'Teléfono') !!}
                                        {!! Form::number('phone', null, ['placeholder' => 'Ingresa su teléfono', 'class' => 'form-control' ]) !!}
                                    </div>
                                </div>
                                    
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::Label('mail', 'Correo electrónico') !!}
                                        {!! Form::text('mail', null, ['placeholder' => 'Ingresa un correo electrónico', 'class' => 'form-control' ]) !!}
                                    </div>
                                </div>

                            </div>
                                    
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="summit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> {{ !empty($give) ? 'Actualizar ' : 'Guardar ' }}
                                    </button>
                                    <a href="{{ route('give.index') }}" class="btn btn-secondary">
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