<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title')  {{ config('app.name', 'Ecomuseo') }}</title>

    <!-- Vendor CSS Files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="vendor/venobox/venobox.css" rel="stylesheet">
    <link href="vendor/aos/aos.css" rel="stylesheet">
   
    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script src="{{ asset('js/main.js') }}" defer></script>

</head>
<body class="cuerpo">
@php
$page = Route::current();

@endphp

 <!-- ======= Top Bar ======= -->
 <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:ecoavans@gmail.com">ecomuseominadeoroabangares@gmail.com</a>
        <i class="icofont-phone"></i> +506 2662 0004
      </div>
      <div class="social-links">
        <a href="https://www.facebook.com/ecomuseominero1991" class="facebook" target="_blank"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/ecomuseoabangares/?hl=es-la" class="instagram" target="_blank"><i class="icofont-instagram"></i></a>
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
            <li class="<?php if($page =='welcome'){echo 'active';} ?>"> <a href="{{route('welcome')}}"><h6>Inicio</h6></a></li>
            <li class="<?php if($page  == 'nosotros'){echo 'active';} ?>"> <a href="{{route ('nosotros')}}"><h6>Sobre nosotros</h6></a></li>
            <li class="<?php if($page  == 'actividad'){echo 'active';} ?>"> <a href="{{route ('actividad')}}"><h6>Actividades</h6></a></li>
            <li><a href="{{route('welcome')}}"><h6>Galería</h6></a></li>
            
            <li class="drop-down"><a href="">Cooperar</a>
            <ul>
            <li class="<?php if($page  == 'amigoReq'){echo 'active';} ?>"> <a href="{{route ('amigoReq')}}"><h6>Voluntariado</h6></a></li>
            <li class="<?php if($page  == 'realizarDonaciones'){echo 'active';} ?>"> <a href="{{route ('realizarDonaciones')}}"><h6>Donaciones</h6></a></li>
            </ul>
          </li>

           
          <li><a href="{{route('welcome')}}"><h6>Contactos</h6></a></li>

          <li>
  

            @if (Auth::guest())
          <li  class="dropdown <?php if($page =='login' || $page  =='register' || $page  =='edit' || $page =='home' ){echo 'active';} ?>">
            <a class="nav-link" data-toggle="dropdown" href="#"> <h6>  Iniciar sesión</h6>  <i class="fas fa-caret-down"></i> </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <ul>           
              <li class=" black <?php if($page  =='login'){echo 'active';} ?>">
                <a href="{{ route('login') }}" class="dropdown-item"> <i class="fas fa-user-circle"></i> <h6>  Ingresar</h6></a></li>
              <div class="dropdown-divider"></div>
              <li class=" black <?php if($page  =='register'){echo 'active';} ?>"  >

                <a href="{{route('register')}}" class="dropdown-item"><i class="fas fa-user-plus"></i><h6>  Registrarse</h6></a></li>
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
              
              @if( Auth::user()->rol==1 or Auth::user()->rol==2)
                <li class="black">

                    <a href="{{ url ('administracion')}}" class="dropdown-item">
                   <i class="fas fa-cog"></i>Administración
                   </a>
                </li>
                <div class="dropdown-divider"></div>
                @endif
                <form action="" method="POST" class="d-inline">

   
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

    <div id="app">
       

        <main class="py-4">
            @include('partial.alerts')
            @yield('content')
        </main>
    </div>

    <footer id="footer">

   <!-- <div class="footer-newsletter">
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
    </div>-->

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Ecomuseo de las minas de Abangares</h4>
            <p>
              Ubicación <br>
              La Sierra, Abangares<br>
              Guanacaste, Costa Rica <br><br>
              <strong>Telefono:</strong>+506 2662 0004<br>
              <strong>Email:</strong>ecomuseominadeoroabangares@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Enlaces útiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('welcome')}}">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route ('nosotros')}}">Sobre nosotros</a></li>
            </ul>
          </div>


          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Otras redes sociales</h4>
            <p>Siguenos en todas nuestras redes sociales</p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/ecomuseominero1991" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/ecomuseoabangares/?hl=es-la" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
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


</body>

  
</html>
