<title>Hazte amigo del Ecomuseo</title>
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
<br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-14">
                <div class="card">
                    <div class="container" data-aos="fade-up">
  
                    
                        <div class="card text-center">
                          <!--  <div class="card-header">
                                Voluntariado
                            </div>-->
                            <div class="card-body">
                            <div class="row">
                                <h5 class="card-title">¡Hazte Amigo del ECOMUSEO de Abangares!</h5>
                                <p class="text-justify">La Asociación Junta Administradora del Ecomuseo de Abangares ofrece el
                                                    programa Amigos del ECOMUSEO de Abangares, mediante el cual toda
                                                    persona que desee participar de las actividades que se desarrollen y poder gozar
                                                    de privilegios, promociones y descuentos especiales.
                                </p>
                                <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                            <div class="icon-box">
                                                <img src="img/amigo.png" class="rounded float-right img-fluid" alt="...">
                                                <a href="img/voluntariado.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Voluntariado"><i class="bx bx-plus"></i></a>
                                            </div>
                                        </div>
                            </div>
                           <!-- <div class="card-footer text-muted">
                                ...
                            </div>-->
                        </div>

                    </div>
                    <br>
                  
                        <div class="container" data-aos="fade-up">

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
                                    <h5 class="card-title">¿Qué es “El Programa Amigos del ECOMUSEO”, de Asociación Junta
                                                           Administradora del Ecomuseo de Abangares (AJADEMA)?
                                                           </h5>
                                    <p class="text-justify">Es una iniciativa comunal privada, sin ánimo de lucro, creada para apoyar todas
                                                        las actividades y proyectos del ECOMUSEO, así como la conservación y el
                                                        crecimiento de sus piezas y atractivos patrimoniales, representadas en las
                                                        estaciones interpretativas y colecciones que se constituyen en una parte
                                                        significativa de la memoria colectiva de la identidad abangareña.
                                                        <br/>
                                                        Al igual que en otras Organizaciones de Amigos, programa una serie de
                                                        actividades tales como presentaciones culturales, seminarios, conferencias,
                                                        exposiciones fotográficas, emprendedurismo, artesanía, turismo, música,
                                                        ambiente, actividades deportivas, homenaje a ciudadanos visitas guiadas, talleres,
                                                        promoción literaria, afiches, postales y objetos de arte que se pueden adquirir en
                                                        el ECOMUSEO.
                                                        <br/>
                                                        Al afiliarse como Amigo del ECOMUSEO de Abangares, usted empezará a formar
                                                        parte de este grupo especial de personas que conforman la Asociación y quienes
                                                        apoyan los programas y proyectos del ECOMUSEO y a su vez, gozan de
                                                        privilegios y descuentos especiales.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Requisitos para ser voluntario</h5>
                                <p class="text-justify">
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