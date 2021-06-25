<title>Formulario reservaciones</title>
@if( Auth::user()->rol==1 or Auth::user()->rol==2)
@extends('layouts.adminlayout')
@section('title','Create Reservation')
@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Reservaciones <small>Formulario</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
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

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <h5>{!! Form::Label('identification', 'Identificación') !!}</h5>
                                                {!! Form::number('identification', null, ['class' => 'form-control' ]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>{!! Form::Label('name', 'Nombre') !!}</h5>
                                                    {!! Form::text('name', null, [ 'class' => 'form-control' ]) !!}
                                    
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>{!! Form::Label('lastname', 'Apellidos') !!}</h5>
                                                    {!! Form::text('lastname', null, [ 'class' => 'form-control' ]) !!}
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>{!! Form::Label('adultQuantity', 'Cantidad de adultos') !!}</h5>
                                                    {!! Form::number('adultQuantity', null, ['class' => 'form-control', 'id' => 'Adult', 'onkeyup'=>"suma();" ]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>{!! Form::Label('childrenQuantity', 'Cantidad de niños') !!}</h5>
                                                    {!! Form::number('childrenQuantity', null, ['class' => 'form-control', 'id' => 'Childrent', 'onkeyup'=>"suma();" ]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>{!! Form::Label('total', 'Total(Colones)') !!}</h5>
                                                    {!! Form::number('total', null, [ 'class' => 'form-control', 'id' => 'total'  ]) !!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">   
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>{!! Form::Label('reservationDate', 'Fecha de reservación') !!}</h5>
                                                
                                                <input type="date" class="input100 form-control" type="date" name="reservationDate" id="reservationDate" 
                                                    min = "<?php echo date("Y-m-d",strtotime(date("Y-m-d")."+ 1 days"));?>" 
                                                    max = "<?php echo date("Y-m-d",strtotime(date("Y-m-d")."+ 10 days"));?>" required>
                                                    
                                            </div>
                                        </div>
                                            
                                        <div class="col-md-8">
                                            <div class="form-group">

                                            <h5>{!! Form::Label('reservationHour', 'Hora del tour') !!}</h5>
                                                <br>
                                                <h4>{!! Form::radio('reservationHour', '8:00 am') !!} 8:00 am</h4>
                                                <h4>{!! Form::radio('reservationHour', '10:00 am') !!} 10:00 am</h4>
                                                <h4>{!! Form::radio('reservationHour', '2:00 am') !!} 2:00 am</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">

                                                <h5> {!! Form::Label('tourType', 'Tipo de tour' ) !!}</h5>
                                                <br>
                                                <h4>{!! Form::checkbox('tourType', 'Senderismo') !!} Senderismo y hiking  
                                                    {!! Form::checkbox('tourType', 'AvistamientoAves') !!} Avistamiento de ave 
                                                    {!! Form::checkbox('tourType', 'MuseoAntiguedades') !!} Museo con exhibición permanente</h4>
                                                <br>
                                                <h4>{!! Form::checkbox('tourType', 'AuditorioEventos') !!} Auditorio de eventos
                                                    {!! Form::checkbox('tourType', 'ToursGuiados') !!} Tours guiados 
                                                    {!! Form::checkbox('tourType', 'GaleríaPH') !!} Galería de piezas históricas</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>{!! Form::Label('email', 'Correo electronico') !!}</h5>
                                                {!! Form::text('email', null, ['class' => 'form-control' ]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <h5>{!! Form::Label('phone', 'Teléfono' ) !!}</h5>
                                                {!! Form::number('phone', null, ['class' => 'form-control' ]) !!}
                                            </div>
                                        </div>                    
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <h5> {!! Form::Label('status', 'Estado de pago:') !!}</h5>
                                                {!! Form::select('status', ['En espera' => 'En espera', 'Aceptado' => 'Aceptar', 'Rechazado' => 'Rechazar']) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <button type="summit" class="btn btn-primary">
                                            <i class="fa fa-save"></i> {{ !empty($reservation) ? 'Actualizar ' : 'Enviar ' }}
                                        </button>
                                        <a href="{{ route('reservation.index') }}" class="btn btn-secondary ">
                                            <i class="fa fa-undo"></i> Atras
                                        </a>
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