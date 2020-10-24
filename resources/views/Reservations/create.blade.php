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

              <div class="row mt-5">
                <div class="col-sm-8 offset-sm-2">
                  <form action="{{route('reservation.store')}}" method = "post">
                    @csrf
                    <h2 style="color: rgba(3, 255, 16, 0.664)" align="center">Agregar Reservacion: </h2>

                
                <div class="row">
                      <div class="col-md-4">

                            <div class="form-group">
                            <label for="identification">Identificación:</label>
                            <br/>
                            <input type="text" name = "identification" id = "identification" class="form-control" required>
                            </div>
                      </div>

                      <div class="col-md-4">
                            <div class="form-group">
                            <label for="name">Nombre:</label>
                            <br/>
                            <input type="text" name = "name" id = "name" class="form-control" required>
                            </div>
                      </div>

                      <div class="col-md-4">
                            <div class="form-group">
                            <label for="lastname">Apellidos:</label>
                            <br/>
                            <input type="text" name = "lastname" id = "lastname" class="form-control" required>
                            </div>
                      </div>
                </div>

                    


                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                          <label for="adultQuantity">Cantidad Adultos:</label>
                          <br/>
                          <input type="number" min="0"name = "adultQuantity" id = "adultQuantity" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                          <label for="childrenQuantity">Cantidad Niños:</label>
                          <br/>
                          <input type="number" min="0"name = "childrenQuantity" id = "childrenQuantity" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="row">   
                    <div class="col-md-4">
                        <div class="form-group">
                          <label for="reservationDate">Fecha a reservar:</label>
                          <br/>
                          <input type="date" name = "reservationDate" id = "reservationDate" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                          <label for="reservationHour">Hora de reservación:</label>
                          <br/>

                          <input type="radio" name="reservationHour" value="8:00 am"> 8:00 AM
                          <input type="radio" name="reservationHour" value="10:00 am"> 10:00 AM 
                          <input type="radio" name="reservationHour" value="2:00 am"> 2:00 AM 

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                                <label for="tourType">Tipo de de tour en el que desea participar:</label>
                                <br/>

                                <input type="radio" name="tourType" value="AvistamientoAves"> Avistamiento de fauna
                                <input type="radio" name="tourType" value="Senderismo"> Senderismo 
                                <input type="radio" name="tourType" value="MuseoAntiguedades"> Tour Histórico 

                        </div>
                    </div>
                </div>


                <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Correo electronico (Opcional):</label>
                                <br/>
                                <input type="email" name = "email" id = "email" class="form-control" >
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="phone">Telefono de contacto:</label>
                                <br/>
                                <input type="tel" name = "phone" id = "phone" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tourPrice">Precio:</label>
                                <br/>
                                <input type="text" name = "tourPrice" id = "tourPrice" class="form-control" >
                            </div>
                        </div>                        
                </div>

                    <button type = "submit" class = "btn btn-primary">ENVIAR</button>
                  </form>
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
