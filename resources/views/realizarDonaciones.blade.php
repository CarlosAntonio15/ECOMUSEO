<title>Realizar donaciones</title>
@extends('layouts.main')
@extends('layouts.app')
@section('title','Information Donation')
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
<br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-14">
               <!-- <div class="card">-->
                  <!-- <div class="container" data-aos="fade-up">-->

                      <!-- <div class="card text-center">-->
                            <!--<div class="card-header">
                                Donaciones
                            </div>-->
                           <!-- <div class="card-body">-->
                           <div class="section-title">
                                <h5>Realizando donaciones a Ecomuseo de Abangares</h5>
                           </div>
                                <p class="text-justify">Bienvenido a nuestra página de donaciones del Ecomuseo minas de oro de Abangares, acá obtendrás más información sobre las diferentes formas de realizar una donación a nuestro complejo turístico.</p>

                            <!--</div>-->
                           <!-- <div class="card-footer text-muted">
                                ...
                            </div>-->
                       <!-- </div>-->

                   <!--</div>-->
                    <br>
                   <!--<div class="container" data-aos="fade-up">
                        <div class="card text-center">
                        <br>
                        <div class="row">
                                        <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                            <div class="icon-box">
                                                <img src="img/voluntariado.jpeg" class="rounded float-right img-fluid" alt="...">
                                                <a href="img/voluntariado.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Voluntariado"><i class="bx bx-plus"></i></a>
                                            </div>
                                        </div>
                                    
                                        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                                            <div class="icon-box">
                                                <img src="img/voluntariogrupo.jpeg" class="rounded float-right img-fluid" alt="...">
                                                <a href="img/voluntariogrupo.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Voluntariado"><i class="bx bx-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>  
                            <div class="card-footer text-muted"></div>
                        </div>
                    </div>-->
                    <br>
                    <div class="row" data-aos="fade-up">
                        <div class="col-sm-6">
                            <!--<div class="card">-->
                                <div class="card-body">
                                    <h5 class="card-title">¿Cómo realizar donaciones al Ecomuseo de Abangares?</h5>
                                    <p class="text-justify">Las donaciones las podrás realizar por medio de la plataforma web, si es monetaria mediante la cuenta
                                                        y si es tipo material o alimentos, deberás asistir al ecomuseo y realizar la entrega personalmente.
                                    </p>
                                </div>
                           <!-- </div>-->
                        </div>
                        <div class="col-sm-6">
                            <!--<div class="card">-->
                            <div class="card-body">
                                <h5 class="card-title">Tipo de donaciones</h5>
                                <p class="text-justify">
                                Se cuenta con diversos tipos de donaciones, entre ellas tenemos las siguientes:<br>
                                    1-	Monetaria (Por medio de esta página o presencial)<br>
                                    2-	Material (Materiales de construcción, entre otras…)<br>
                                    3-  Alimentos(Frutas, verduras, entre otras...)
                                </p>
                                        
                            </div>
                           <!-- </div>-->
                        </div>
                        <div class="col-sm-6">
                            <!--<div class="card">-->
                            <div class="card-body">
                                <h5 class="card-title">Requisitos para realizar donaciones</h5>
                                <p class="text-justify">
                                    1-	Contar con cuenta por medio de la cual pueda hacer las transacciones monetarias..<br>
                                    2-	Si es donación material entregarla directamente en nuestro complejo turístico.<br>
                                    3-	Especificar en el formulario la fecha, hora y cantidad a entregar en caso de ser donación material.<br>
                                </p>
                                <div class="col-sm-6">
                            <!--<div class="card">-->
                            <div class="card-body">
                                <h5>Cuentas de La Asociación Junta Administradora del Ecomuseo Minero de Abangares. </h5>
                                <p class="text-justify">
                                A dichas cuentas podrás realizar tus donaciones monetarias o pago de las actividades a las que deseas asistir:<br>
                                    1-	Número de Cuenta:
                                        100-01-025-002775-6<br>
                                    2-	Cuenta Cliente: 
                                        15102510010027756<br>
                                    3-  Cuenta IBAN: 
                                        CR91 0151 0251 0010 0277 56
                                </p>
                                        
                            </div>
                           <!-- </div>-->
                        </div>
                        </p>
                                <a href="{{ route('donation.create')}}" class="btn btn-primary">Donación</a>
                                
                            </div>
                            <!--</div>-->
                        </div>
                    </div>

                <!--</div>-->
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