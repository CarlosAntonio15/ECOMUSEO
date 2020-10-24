@extends('layouts.main')
@extends('layouts.app')
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

    <?php $page='actividad';?>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="container" data-aos="fade-up">
                <div class="card-header">

                  <div class="section-title">
                    <h2>Actividades</h2><br>
                  <!--  <h4>Consulte nuestras <span>actividades</span></h3>-->
                    <h5>Te invitamos a conocernos por medio de las actividades que se realizan en el Ecomuseo de las minas de Abangares.</h4><br>
                  </div>
                </div>  
                  <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                      <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <p></p>
                            <h3><a href="">Auditorio para eventos</a></h4>
                            <p></p>
                            <img src="img/eventos.jpg" class="rounded float-right img-fluid" alt="...">

                        </div>
                      </div>
                  
                  

                      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">

                          <div class="icon"><i class="bx bx-file"></i></div>
                          <p></p>
                          <h4><a href="">Museo con exhibición permanente</a></h4>
                          <p></p>
                          <img src="img/auditorio.jpg" class="rounded float-right img-fluid" alt="...">
                          
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">

                          <div class="icon"><i class="bx bx-tachometer"></i></div>
                          <p></p>
                          <h4><a href="">Galería piezas históricas</a></h4>
                          <p></p>
                          <img src="img/piezas.jpeg" class="rounded float-right img-fluid" alt="...">

                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">

                        
                          <div class="icon"><i class="bx bx-world"></i></div>
                          <h4><a href="">Tours y visitas guiadas</a></h4>
                          <p></p>
                          <img src="img/tour.jpg" class="rounded float-left img-fluid" alt="...">
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">

                          
                          <div class="icon"><i class="bx bx-slideshow"></i></div>
                          <h4><a href="">Senderismo y Hiking</a></h4>
                          <p></p>
                          <img src="img/senderismo.jpg" class="rounded float-center img-fluid" alt="...">

                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">

                          
                          <div class="icon"><i class="bx bx-arch"></i></div>
                          <h4><a href="">Avistamiento de aves</a></h4>
                          <p></p>
                          <img src="img/avistamiento.jpg" class="rounded float-right img-fluid" alt="...">

                        </div>
                      </div>

                    <br>
                    {{-- <div class="btn-group"> --}}
                            <td> <a <?php if($page =='reservation.create'){echo 'active';} ?>">
                             <a href="{{route('reservation.create')}}" class="btn btn-primary" >Reserve aquí</a></td>
                    {{-- </div> --}}
              <br>
              <br>

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