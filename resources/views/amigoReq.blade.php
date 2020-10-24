@extends('layouts.main')
@extends('layouts.app')
@section('title','Information Voluntary')
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

<?php $page = 'amigo'; ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-14">
                <div class="card">
                    <div class="container" data-aos="fade-up">

                        <div class="card text-center">
                            <div class="card-header">
                                Voluntariado
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Hazte amigo del Ecomuseo</h5>
                                <p class="card-text">Bienvenido a nuestra página del servicio de voluntariado del Ecomuseo minas de oro de Abangares, acá obtendrás más información sobre nuestra forma de trabajo en los voluntariados.</p>

                            </div>
                            <div class="card-footer text-muted">
                                ...
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="container" data-aos="fade-up">
                        <div class="card text-center">
                        <br>
                        <div class="icon-box">
                            <div class="col-lg-6 col-md-9 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                <img src="img/voluntariado.jpeg" class="rounded float-right img-fluid col-md-12" alt="...">
                                <img src="img/voluntariogrupo.jpeg" class="rounded float-left img-fluid col-md-12 col-md-offset-12"alt="..." >
                            </div>
                            <br>
                            </div>
                            <div class="card-footer text-muted"></div>
                        </div>
                    </div>
                    <br>
                    <div class="row" data-aos="fade-up">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">¿Cómo ser parte de nuestros servicios de voluntariado en Ecomuseo de Abangares?</h5>
                                    <p class="card-text">Para ser parte de nuestro voluntariado sólo debes de cumplir con los requisitos descritos en este documento y seleccionar el tipo de formulario que desea completar.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Requisitos para ser voluntario</h5>
                                <p class="card-text">
                                    1-	Ser mayor de edad para inscribirse en nuestro servicio de voluntariado.<br>
                                    2-	Si es menor de edad deberá inscribirlo una persona adulta encargado.<br>
                                    3-	Contar con transporte para asistir a nuestro complejo turístico ya que no se cuenta con medios suficientes para brindar dicho servicio.<br>
                                    4-	Traer alimentación propia debido a que el Ecomuseo no cuenta con un lugar adecuado para brindar alimentación.<br>
                                    5-	Asistir con ropa cómoda.<br>
                                </p>
                                <a href="{{ route('voluntary.create')}}" class="btn btn-primary">Ser voluntario</a>
                                
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