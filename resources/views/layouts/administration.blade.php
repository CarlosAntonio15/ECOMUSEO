@if( Auth::user()->rol==1 or Auth::user()->rol==2)
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  

  <title>Administración</title>
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
<div class="contenedor">
<body  class="cuerpo" >

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:ecoavans@gmail.com">ecomuseominadeoroabangares@gmail.com</a>
        <i class="icofont-phone"></i> +506 2662 0004
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://www.facebook.com/ecomuseominero1991" class="facebook" target="_blank"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/ecomuseoabangares/?hl=es-la" class="instagram" target="_blank"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a>Administración Ecomuseo</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

            
            @if (Auth::guest())
          
          @else
            <li class="dropdown <?php if($page ?? ''  =='home'){echo 'active';} ?>">

              <a class="nav-link" data-toggle="dropdown" href="#">  {{ Auth::user()->name }} <i class="fas fa-caret-down"></i></a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <ul>   
              <li class="black">    

                @method('PUT')
                @csrf
                </form>
                @method('PUT')
                @csrf
                </form>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
              </ul>
            </li> 
          @endif
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header>

  
  <br><br><br><br/>
  <section id="container">
    <div class="divContainer">
      <div>
        <h1 class="titlePanelControl">Panel de control administrativo</h1>
        <br/>
      </div>
      <div class="dashboard">

        <div class="row">
          <div class="col-sm-6">
      <a href="{{ route ('voluntary.index')}}" ><i class="fas fa-registered"></i> 
          <p>
          <strong> Voluntarios</strong><br>
          <span>Administrar</span>
          </p>
        </a>
            <form action="" method="POST" class="d-lg-inline-flex">


      <a href="{{ route ('usuario.asignarol')}}"><i class="fas fa-user"></i>
      <p>
        <strong>  Usuarios </strong><br>
        <span>Administrar</span>
      </p>
        </a>
            <form action="" method="POST" class="d-lg-inline-flex">
  

      <a href="{{ route ('give.index')}}"><i class="fas fa-donate"></i>
        <p>
          <strong>  Donaciones </strong><br>
          <span>Administrar</span>
        </p>
      </a>
      <form action="" method="POST" class="d-lg-inline-flex">
  
    

      <a href="{{ route ('reservation.index')}}"> <i class="fas fa-resistance"></i> 
        <p>
          <strong>Reservaciones </strong>
          <span>Administrar</span>
        </p>
      </a>
      <form action="" method="POST" class="d-lg-inline-flex">


      <a href="{{ route ('tiquete.index')}}"> <i class="fas fa-resistance"></i> 
        <p>
          <strong>Entrada</strong>
        </p>
      </a>
      <form action="" method="POST" class="d-lg-inline-flex">


  @method('PUT')
  </a>
      
      </div>
    </div>
</div>

<div class="card-footer">
  <button class="btn btn-warning">
      <h1 class="logo mr-auto"><a href="{{route('welcome')}}">Atras<span></span></a></h1>
  </button>
</div>

  </section>
</body>
</div>
</html>

@endif

@if( Auth::user()->rol==3 )

@extends('layouts.main')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <br><br><br><br><br><br>
    <div class="contenedor">
        <div class="redAlert">
          <section>
            <h1 style="color: rgb(0, 0, 0)" class="card-title">*Acceso restringido, solo personal autorizado* </h1>
        </section>
        <div class="card-footer">
          <button class="btn btn-warning">
              <h1 class="logo mr-auto"><a href="{{route('welcome')}}">Atras<span></span></a></h1>
          </button>
        </div>
        </div>
      </div>
</body>

</html>

@endif