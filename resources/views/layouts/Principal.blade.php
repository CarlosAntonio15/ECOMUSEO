<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ecomuseo Abangares</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="vendor/venobox/venobox.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body class="cuerpo">

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:ecoavans@gmail.com">ecoavans@gmail.com</a>
        <i class="icofont-phone"></i> +506 2662 0004
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://www.facebook.com/ecomuseominero1991" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/ecomuseoabangares/?hl=es-la" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{route('welcome')}}">Ecomuseo</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li class="<?php if($page =='welcome'){echo 'active';} ?>"> <a href="{{route('welcome')}}">Inicio</a></li>
            <li class="<?php if($page  == 'nosotros'){echo 'active';} ?>"> <a href="{{route ('nosotros')}}">Sobre nosotros</a></li>
            <li class="<?php if($page  == 'actividad'){echo 'active';} ?>"> <a href="{{route ('actividad')}}">Actividades</a></li>
            <li><a href="#portfolio">Galeria</a></li>
            

            <li class="drop-down"><a href="">Formularios</a>
            <ul>
            <li class="<?php if($page  == 'amigoReq'){echo 'active';} ?>"> <a href="{{route ('amigoReq')}}">Voluntariado</a></li>
            <li class="<?php if($page  == 'realizarDonaciones'){echo 'active';} ?>"> <a href="{{route ('realizarDonaciones')}}">Donaciones</a></li>
            </ul>
          </li>

           
          <li><a href="#contact">Contactos</a></li>

          <li>
  

            @if (Auth::guest())
          <li  class="dropdown <?php if($page =='login' || $page  =='register' || $page  =='edit' || $page =='home' ){echo 'active';} ?>">
            <a class="nav-link" data-toggle="dropdown" href="#">   Iniciar sesión  <i class="fas fa-caret-down"></i> </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <ul>           
              <li class=" black <?php if($page  =='login'){echo 'active';} ?>">
                <a href="{{ route('login') }}" class="dropdown-item"> <i class="fas fa-user-circle"></i>   Ingresar</a></li>
              <div class="dropdown-divider"></div>
              <li class=" black <?php if($page  =='register'){echo 'active';} ?>"  >

                <a href="{{route('register')}}" class="dropdown-item"><i class="fas fa-user-plus"></i>  Registrarse</a></li>
            </ul>     
        </li>
          @else
            <li class="dropdown <?php if($page  =='home'){echo 'active';} ?>">

              <a class="nav-link" data-toggle="dropdown" href="#">  {{ Auth::user()->name }} <i class="fas fa-caret-down"></i></a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <ul>   
              <li class="black">    

                @method('PUT')
                @csrf
                </form>

              {{-- @foreach ($collection as $item)
                  
              @endforeach --}}


                <div class="dropdown-divider"></div>
                  <li class="black">
                    <a href="{{ route ('voluntary')}}" class="dropdown-item">
                   <i class="fas fa-cog"></i>Gestión de voluntarios</li></a>
                <form action="" method="POST" class="d-inline">

                <div class="dropdown-divider"></div>
                  <li class="black">
                    <a href="{{ route ('donation')}}" class="dropdown-item">
                   <i class="fas fa-cog"></i>Gestión de donaciones</li></a>
                <form action="" method="POST" class="d-inline">

                <!--<div class="dropdown-divider"></div>
                <li class="black">
                  <a href="{{ route ('actividad')}}" class="dropdown-item">
                   <i class="fas fa-cog"></i> Gestión actividades</li></a>
                <form action="" method="POST" class="d-inline">-->
                <div class="dropdown-divider"></div>
                <li class="black">
                  <a href="{{ route ('reservation')}}" class="dropdown-item">
                   <i class="fas fa-cog"></i> Gestión de reservaciones</li></a>
                <form action="" method="POST" class="d-inline">
                @method('PUT')
                @csrf
                </form>


                <div class="dropdown-divider"></div>
                <li class=" black" > <a  href="{{ route('logout') }}"  class="dropdown-item"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i class="fas fa-sign-out-alt"></i>  {{ __('Cerrar sesión') }}</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
              </ul>
            </li> 
          @endif
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

        <!--  </li>
        </ul>
      </nav><!-- .nav-menu -->

   <!-- </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Bienvenidos al <span> Ecomuseo</spa>
      </h1>
      <h2>Minas de oro Abangares</h2>
      <div class="d-flex">
        <a href="{{route('nosotros')}}" class="btn-get-started scrollto">Empecemos</a>
        <a href="https://www.youtube.com/watch?v=Uof7jmeYczU" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Ver Video <i class="icofont-play-alt-2"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

<!-- ======= portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeria</h2>
          <h3>Consulte nuestra galeria</h3>
          <p> Atractivos del Ecomuseo mina de oro de Abangares </p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100"> 
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="img/portfolio/corredorBiologicoMonoAullador.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Corredor Biologico del mono aullador</h4>
              <p>Información</p>
              <a href="img/portfolio/corredorBiologicoMonoAullador.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="img/portfolio/Ecoantigua.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="img/portfolio/Ecoantigua.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="img/portfolio/EcoBosque.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="img/portfolio/EcoBosque.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="img/portfolio/Ecotrail.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="img/portfolio/Ecotrail.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="img/portfolio/MapaEcomuseo.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="img/portfolio/MapaEcomuseo.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="img/portfolio/TrenEco.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="img/portfolio/TrenEco.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="img/portfolio/EcoSendero.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="img/portfolio/EcoSendero.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="img/portfolio/EcoMaquina.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="img/portfolio/EcoMaquina.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="img/portfolio/EcoCarreta.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="img/portfolio/EcoCarreta.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
  </section>


  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contactos</h2>
          <h3><span>Contactenos</span></h3>
          <p> Con gusto antenderemos tus consultas </p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Ubicación</h3>
              <p></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>ecoavans@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Contactanos</h3>
              <p>+506 2662 0004</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 " >
          <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d251255.89784848035!2d-85.34835049027099!3d10.271782895348275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa01e3c298e75bb%3A0xc1f9da3951795615!2sEcomuseo%20de%20las%20Minas%20de%20Abangares!5e0!3m2!1ses-419!2scr!4v1600228907172!5m2!1ses-419!2scr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre Completo" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">Su mensage se ha enviado. Gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensage</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Noticias</h4>
            <p>Únete a nuestras noticias</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Suscríbete">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Ecomuseo de las minas de Abangares<span>.</span></h3>
            <p>
              Ubicación <br>
              La Sierra, Abangares<br>
              Guanacaste, Costa Rica <br><br>
              <strong>Telefono:</strong>+506 2662 0004<br>
              <strong>Email:</strong> ecoavans@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Enlaces útiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sobre nosotros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Servicios</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Termino de servicios</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Politica de privacidad</a></li>
            </ul>
          </div>

 <!--         <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Otras redes sociales</h4>
            <p>Siguenos en todas nuestras redes sociales</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

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

</body>

</html>