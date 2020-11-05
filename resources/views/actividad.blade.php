<title>Actividades</title>
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
    <br>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
           <div class="container" data-aos="fade-up">
            <br/><br/>
              <div class="card-header">
                <div class="section-title">
                  <h2>Actividades</h2><br>
                    <!--  <h4>Consulte nuestras <span>actividades</span></h3>-->
                    <h5>Te invitamos a conocernos por medio de las actividades que se realizan en el Ecomuseo de las minas de Abangares.</h4><br>
                </div>
              </div>
              <div class="row">  
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box">
                  <p></p>
                    <h5>Auditorio de eventos</h5>
                    <img src="img/eventos.jpg" class="rounded float-right img-fluid" alt="...">
                    <!--<p>Se brindan charlas edicativas sobre la historia de la fiebre del oro, entre otro temas.</p>-->
                    <a href="img/eventos.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Audiotorio"><i class="bx bx-plus"></i></a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box">
                  <p></p>
                    <h5>Exhibición permanente</h5>
                    <img src="img/auditorio.jpg" class="rounded float-right img-fluid" alt="...">
                   <!-- <p>Acá se muestran viejas fotografías y objetos mineros como crisoles, carburas, poleas, un horno, entre otras.</p>-->
                    <a href="img/auditorio.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Audiotorio"><i class="bx bx-plus"></i></a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box">
                    <p></p>
                    <h5>Galería piezas históricas</h5>
                    <img src="img/piezash.jpeg" class="rounded float-right img-fluid" alt="...">
                    <!--<p>Se brindan exhibiciones a visitantes donde se muestran todas las piezas históricas
                      que tiene el Ecomuseo, junto con la historia que estas abarcan.
                    </p>-->
                    <a href="img/piezas.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Galería de piezas históricas"><i class="bx bx-plus"></i></a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box">
                  <p></p>
                    <h5>Tours y visitas guiadas</h5>
                    <img src="img/tour.jpg" class="rounded float-left img-fluid" alt="...">
                   <!-- <p>Se brinda el servicio de guias de cada uno de los atractivos que ofrece el Ecomuseo
                      de Abangares.
                    </p>-->
                    <a href="img/tour.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Tours y visitas guiadas"><i class="bx bx-plus"></i></a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box">
                  <p></p>
                    <h5>Senderismo</h5>
                    <img src="img/senderismo.jpg" class="rounded float-center img-fluid" alt="...">
                    <!--<p class="text-justify">
                      El recorrido por los senderos del EM, consiste en un maravilloso recorrido de tres horas entre la biodiversidad
                      que albergan treinta y ocho hectáreas (38 ha) de bosque secundario, acercando al visitante al medio natural y al 
                      conocimiento histórico y cultural no solo de Abangares, si no, también del país, a través de elementos patrimoniales y etnográficos distribuidos
                      a través de cinco kilómetros de senderos que combinan, jardines, miradores con impresionantes vistas, variedad escénica,
                      pendientes medianas o hasta fuertes escalones y puentes, requieren de esfuerzo y demanda física pero no ofrecen peligro extremo y son
                      accesibles a todo tipo de público en un espacio muy natural y auténtico.
                    </p>-->
                    <a href="img/senderismo.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Senderismo"><i class="bx bx-plus"></i></a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box">
                    <p></p>
                    <h5>Avistamiento de aves</h5>
                    <img src="img/avistamiento.jpg" class="rounded float-right img-fluid" alt="...">
                   <!-- <p>Se realizan caminatas por los senderos para la observación específica de aves.</p>-->
                        <a href="img/avistamiento.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Avistamiento"><i class="bx bx-plus"></i></a>
                        <br/> 
                       
                </div>
                <br/> <br/>

                
                
                <br>
                <br>

              </div>    
            </div> 
              <div>
                <div class="col-lg-4"> 
                  <div class="form-group">
                    <a href="{{ route('reservation.create')}}" class="btn btn-success">Reserve aquí</a>
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