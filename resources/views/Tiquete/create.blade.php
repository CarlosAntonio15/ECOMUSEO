<title>Compra de tiquete</title>
@extends('layouts.app')
@section('content')
<div class = "container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Entrada</div>
                <div class="container" data-aos="fade-up">


                    @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                    @endif

                    @if(!empty($tiquete))
                        {!! Form::model($tiquete, ['route' => ['tiquete.update', $tiquete->id], 'method'=>'put']) !!}
                    @else
                        {!! Form::open(['route' => 'tiquete.store', 'method'=>'post']) !!}
                    @endif
                    <div class="row mt-5">
                        <div class="col-sm-8 offset-sm-2">  

                            <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            {!! Form::label('Nombre', 'Nombre') !!}
                                            {!! Form::text('nombre', null, [
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

                            </div>

                            <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                        {!! Form::Label('adultQuantity', 'Cantidad de adultos') !!}</h5>
                                        {!! Form::number('adultQuantity', null, ['placeholder' => 'Ingresa la cantidad de adultos', 'class' => 'form-control', 'id' => 'Adult' ]) !!}
                                        </div>
                                    </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                    {!! Form::Label('childrenQuantity', 'Cantidad de niños') !!}
                                    {!! Form::number('childrenQuantity', null, ['placeholder' => 'Ingresa la cantidad de niños', 'class' => 'form-control', 'id' => 'Childrent' ]) !!}
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">

                                         {!! Form::Label('Calcular') !!}
                                         <br>
                                        <input type="button" value="Calcular precio" class="btn btn-success" onclick="alert(suma());">
                                    
                                    </div>
                                </div>
                         </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">

                                   {!! Form::Label('tourType', 'Tipo de tour') !!}
                                        <br>
                                       {!! Form::radio('tourType', 'Senderismo') !!} Senderismo y hiking
                                        {!! Form::radio('tourType', 'AvistamientoAves') !!} Avistamiento de ave
                                       {!! Form::radio('tourType', 'MuseoAntiguedades') !!} Museo con exhibición permanente
                                        <br>
                                         {!! Form::radio('tourType', 'AuditorioEventos') !!} Auditorio de eventos
                                        {!! Form::radio('tourType', 'ToursGuiados') !!} Tours guiados
                                        {!! Form::radio('tourType', 'GaleríaPH') !!} Galería de piezas históricas

                                    </div>
                                </div>
                            </div>


                              
                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::Label('precio', 'Precio') !!}
                                            {!! Form::number('precio', null, ['placeholder' => 'Precio', 'class' => 'form-control' ]) !!}
                                        </div>
                                    </div>
                            

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::Label('total', 'total') !!}
                                            {!! Form::number('total', null, ['placeholder' => 'Total', 'class' => 'form-control' ]) !!}
                                        </div>
                                    </div>      
                            </div>
 

                            <div class="col-md-4">
                                <div class="form-group">
                                    <button type="summit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> {{ !empty($voluntary) ? 'Actualizar ' : 'Guardar ' }}
                                    </button>
                                    <a href="{{ route('tiquete.index') }}" class="btn btn-secondary btn-sm">
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

<script>
    var suma = function(Adult, Childrent){
        var Adult = parseInt(document.getElementById("Adult").value);
        var Childrent = parseInt(document.getElementById("Childrent").value);
        
        var resultado = Adult * 1000 + Childrent * 500;
        return resultado;
    }
</script>


@endsection