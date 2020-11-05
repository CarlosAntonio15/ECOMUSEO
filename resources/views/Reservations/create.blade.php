<title>Formulario reservaciones</title>
@extends('layouts.app')
@section('title','Create Reservation')
@section('content')

 <!-- Vendor CSS Files -->
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="vendor/venobox/venobox.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

<!--< ?php $page = 'createVol'; ?>-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
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
            <div class="row mt-5">
                <div class="col-sm-8 offset-sm-2">          
                    <h5 style="color: rgba(14, 90, 20, 0.89)" align="center">Formulario Reservar </h5>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">

                                {!! Form::Label('identification', 'Identificación') !!}
                                {!! Form::number('identification', null, ['placeholder' => 'Ingresa su Identificación', 'class' => 'form-control' ]) !!}
                            
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::Label('name', 'Nombre') !!}
                                {!! Form::text('name', null, ['placeholder' => 'Ingresa su nombre', 'class' => 'form-control' ]) !!}
                    
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
                               {!! Form::Label('adultQuantity', 'Cantidad de adultos') !!}
                                {!! Form::number('adultQuantity', null, ['placeholder' => 'Ingresa la cantidad de adultos', 'class' => 'form-control' ]) !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::Label('childrenQuantity', 'Cantidad de niños') !!}
                                {!! Form::number('childrenQuantity', null, ['placeholder' => 'Ingresa la cantidad de niños', 'class' => 'form-control' ]) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">   
                        <div class="col-md-4">
                            <div class="form-group">
                            <label for="reservationDate"><h5>Fecha a reservar:</h5></label>
                            <br/>
                            <input type="date" name = "reservationDate" id = "reservationDate" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                            <label for="reservationHour"><h5>Hora de reservación:</h5></label>
                            <br/>

                            <input type="radio" name="reservationHour" value="8:00 am"> 8:00 am
                            <input type="radio" name="reservationHour" value="10:00 am"> 10:00 am 
                            <input type="radio" name="reservationHour" value="2:00 am"> 2:00 pm 

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                    <label for="tourType"><h5>Tipo de servicio en el que desea participar:</h5></label>
                                    <br/>

                                    <input type="radio" name="tourType" value="AvistamientoAves">Senderismo y hiking
                                    <input type="radio" name="tourType" value="Senderismo">Avistamiento de aves
                                    <input type="radio" name="tourType" value="MuseoAntiguedades">Museo con exhibición permanente
                                    <br/>
                                    <input type="radio" name="tourType" value="AvistamientoAves"> Auditorio de eventos
                                    <input type="radio" name="tourType" value="Senderismo">Tours guiados
                                    <input type="radio" name="tourType" value="MuseoAntiguedades">Galería de piezas históricas
                            </div>
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::Label('email', 'Correo electronico') !!}
                                    {!! Form::text('email', null, ['placeholder' => 'Ingresa un correo electrónico', 'class' => 'form-control' ]) !!}
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::Label('phone', 'Teléfono') !!}
                                    {!! Form::number('phone', null, ['placeholder' => 'Ingresa su teléfono', 'class' => 'form-control' ]) !!}
                                </div>
                            </div>                    
                    </div>

                    
                    <div class="form-group">
                        <button type="summit" class="btn btn-primary">
                            <i class="fas fa-save"></i> {{ !empty($reservation) ? 'Actualizar ' : 'Guardar ' }}
                        </button>
                        <a href="{{ route('reservation.index') }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-undo"></i> Atras
                        </a>
                    </div>
                    
                    <br/>
               
                </div>
            </div>

        {!! Form::close() !!}
              
                      
<br/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="vendor/jquery/jquery.min.js" asp-append-version="true"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js" asp-append-version="true"></script>
  <script src="vendor/jquery.easing/jquery.easing.min.js" asp-append-version="true"></script>
  <script src="vendor/php-email-form/validate.js" asp-append-version="true"></script>
  <script src="vendor/waypoints/jquery.waypoints.min.js" asp-append-version="true"></script>
  <script src="vendor/counterup/counterup.min.js" asp-append-version="true"></script>
  <script src="vendor/owl.carousel/owl.carousel.min.js" asp-append-version="true"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js" asp-append-version="true"></script>
  <script src="vendor/venobox/venobox.min.js" asp-append-version="true"></script>
  <script src="vendor/aos/aos.js" asp-append-version="true"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

@endsection
