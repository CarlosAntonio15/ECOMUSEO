<title>Formulario reservaciones</title>
<div style="background-image: url('/img/rueda.jpg'); " >
@extends('layouts.app')
@section('title','Create Reservation')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!--<div class="card">-->
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

                    @if(!empty($reservation))
                        {!! Form::model($reservation, ['route' => ['reservation.update', $reservation->id], 'method'=>'put']) !!}
                    @else
                        {!! Form::open(['route' => 'reservation.store', 'method'=>'post']) !!}
                    @endif
                    <div class="row mt-8">
                        <div class="col-sm-10 offset-sm-0">  

                        <div class="card-header"><h5 style="color:  rgb(243, 236, 236)" align="center">Formulario Reservar </h5></div>
                            <br>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">

                                    <h5 style="color:  rgb(243, 236, 236)" align="center">{!! Form::Label('identification', 'Identificación') !!}</h5>
                                        {!! Form::number('identification', null, [
                                            'placeholder' => 'Ingresa su Identificación', 
                                                        'class' => 'form-control' ]) !!}
                                    
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                    <h5 style="color:  rgb(243, 236, 236)" align="center"> {!! Form::Label('name', 'Nombre') !!}</h5>
                                        {!! Form::text('name', null, ['placeholder' => 'Ingresa su nombre', 'class' => 'form-control' ]) !!}
                            
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                    <h5 style="color:  rgb(243, 236, 236)" align="center">{!! Form::Label('lastname', 'Apellidos') !!}</h5>
                                        {!! Form::text('lastname', null, ['placeholder' => 'Ingresa sus apellidos', 'class' => 'form-control' ]) !!}
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <h5 style="color:  rgb(243, 236, 236)" align="center">{!! Form::Label('adultQuantity', 'Cantidad de adultos') !!}</h5>
                                        {!! Form::number('adultQuantity', 0, ['placeholder' => 'Ingresa la cantidad de adultos', 'class' => 'form-control', 'id' => 'Adult', 'onkeyup'=>"suma();" ]) !!}
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                    <h5 style="color:  rgb(243, 236, 236)" align="center">{!! Form::Label('childrenQuantity', 'Cantidad de niños') !!}</h5>
                                        {!! Form::number('childrenQuantity', 0, ['placeholder' => 'Ingresa la cantidad de niños', 'class' => 'form-control', 'id' => 'Childrent', 'onkeyup'=>"suma();" ]) !!}
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                    <h5 style="color:  rgb(243, 236, 236)" align="center">{!! Form::Label('total', 'Total(Colones)') !!}</h5>
                                        {!! Form::number('total', 0, [ 'class' => 'form-control', 'id' => 'total'  ]) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">   
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <h5 style="color:  rgb(243, 236, 236)" align="center">{!! Form::Label('reservationDate', 'Fecha de reservación') !!}</h5>
                                        {!! Form::date('reservationDate', \Carbon\Carbon::now()) !!}
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">

                                    <h5 style="color:  rgb(243, 236, 236)" align=""> {!! Form::Label('reservationHour', 'Hora del tour') !!}</h5>
                                        <br>
                                        <h5 style="color:  rgb(243, 236, 236)" align="">   {!! Form::radio('reservationHour', '8:00 am') !!} 8:00 am</h5>
                                        <h5 style="color:  rgb(243, 236, 236)" align=""> {!! Form::radio('reservationHour', '10:00 am') !!} 10:00 am</h5>
                                        <h5 style="color:  rgb(243, 236, 236)" align="">{!! Form::radio('reservationHour', '2:00 am') !!} 2:00 am</h5>
                                    
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">

                                    <h5 style="color:  rgb(243, 236, 236)" align=""> {!! Form::Label('tourType', 'Tipo de tour') !!}</h5>
                                        <br>
                                        <h5 style="color:  rgb(243, 236, 236)" align=""> {!! Form::checkbox('tourType', 'Senderismo') !!} Senderismo y hiking  
                                        {!! Form::checkbox('tourType', 'AvistamientoAves') !!} Avistamiento de ave {!! Form::checkbox('tourType', 'MuseoAntiguedades') !!} Museo con exhibición permanente</h5>
                                      <!-- <h5 style="color:  rgb(243, 236, 236)" align=""> {!! Form::checkbox('tourType', 'AvistamientoAves') !!} Avistamiento de ave</h5>
                                        <h5 style="color:  rgb(243, 236, 236)" align=""> {!! Form::checkbox('tourType', 'MuseoAntiguedades') !!} Museo con exhibición permanente</h5>-->
                                        <h5 style="color:  rgb(243, 236, 236)" align=""> {!! Form::checkbox('tourType', 'AuditorioEventos') !!} Auditorio de eventos
                                        {!! Form::checkbox('tourType', 'ToursGuiados') !!} Tours guiados {!! Form::checkbox('tourType', 'GaleríaPH') !!} Galería de piezas históricas </h5>
                                        <!-- <h5 style="color:  rgb(243, 236, 236)" align="">{!! Form::checkbox('tourType', 'ToursGuiados') !!} Tours guiados</h5>
                                        <h5 style="color:  rgb(243, 236, 236)" align="">{!! Form::checkbox('tourType', 'GaleríaPH') !!} Galería de piezas históricas</h5>-->

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <h5 style="color:  rgb(243, 236, 236)" align="center"> {!! Form::Label('email', 'Correo electronico') !!}</h5>
                                        {!! Form::text('email', null, ['placeholder' => 'Ingresa un correo electrónico', 'class' => 'form-control' ]) !!}
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                    <h5 style="color:  rgb(243, 236, 236)" align="center"> {!! Form::Label('phone', 'Teléfono') !!}</h5>
                                        {!! Form::number('phone', null, ['placeholder' => 'Ingresa su teléfono', 'class' => 'form-control' ]) !!}
                                    </div>
                                </div>                    
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <h5 style="color:  rgb(243, 236, 236)" > {!! Form::Label('status', 'Estado de pago:') !!}</h5>
                                        {!! Form::select('status', ['Espera' => 'En espera']) !!}
                                    </div>
                                </div>
                                
                            <div class="form-group">
                                <button type="summit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> {{ !empty($reservation) ? 'Actualizar ' : 'Guardar ' }}
                                </button>
                                <a href="{{ route('actividad') }}" class="btn btn-secondary ">
                                    <i class="fas fa-undo"></i> Atras
                                </a>
                            </div>
                            
                        </div>
                    </div>
                    {!! Form::close() !!}                     
                    <br/>
                </div>
           <!-- </div>-->
        </div>
    </div>
</div>



<script>
    var suma = function(){
        var inputAdulto = document.getElementById("Adult")
        var inputChildrent = document.getElementById("Childrent")
        if(!inputAdulto)return
        if(!inputChildrent)return
        var Adult = parseInt(inputAdulto.value);
        var Childrent = parseInt(inputChildrent.value);
        var Resultado = Adult * 1000 + Childrent * 500;
        

        document.getElementById('total').value = Resultado;

    }
</script>

<script>
    function sumar(){
        var inputAdulto = document.getElementById("Adult")
        var inputChildrent = document.getElementById("Childrent")
        if(!inputAdulto)return
        if(!inputChildrent)return
        var Adult = parseInt(inputAdulto.value);
        var Childrent = parseInt(inputChildrent.value);
        var Resultado = Adult * 1000 + Childrent * 500;
        
        document.getElementById('total').value = Resultado;

    }
</script>

@endsection