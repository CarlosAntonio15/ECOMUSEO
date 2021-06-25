<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/ecoAbangares.jpeg') }}" type="image/ico" />

    <title>Administración</title>

    <!-- Bootstrap -->
    <link href="{{ asset('admin/vendor/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin/vendor/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin/vendor/nprogress/nprogress.css') }}" rel="stylesheet">
  
    <!-- PNotify -->
    <link href="{{ asset('admin/vendor/pnotify/pnotify.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/pnotify.buttons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/pnotify.nonblock.css') }}" rel="stylesheet">
    
    <!-- Datatables -x->
    
    <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet">

    <x!-- Custom Theme Style -->
    <link href="{{ asset('admin/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md">

    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ route ('welcome') }}" class="site_title"> <img src="{{ asset('img/ecoAbangares.jpeg') }}" width="70" height="40"><span> Ecomuseo</span> </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('admin/images/img.jpg') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>Usuario</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu a un LLLAAAAAADDDDOOOOOOOO -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  
                  <li><a><i class="fa fa-book"></i> Reservaciones <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('reservation.index')}}">Lista de reservaciones</a></li>
                      <li><a href="{{route('reservation.create')}}">Nueva reservación</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-male"></i> Voluntariado <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('voluntary.index')}}">Lista de voluntarios</a></li>
                      <li><a href="{{route('createGus')}}">Nuevo voluntario</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-gift"></i> Donaciones <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('give.index')}}">Lista de donaciones</a></li>
                      <li><a href="{{route('give.create')}}">Nueva donación</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Ingresos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('tiquete.index')}}">Lista de tiquetes</a></li>
                      <li><a href="{{route('tiquete.create')}}">Nuevo tiquete</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-file-text"></i>Egresos<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('expense.index')}}">Lista de egresos</a></li>
                      <li><a href="{{route('expense.store')}}">Nuevo egreso</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Asignasión</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-group"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route ('usuario.asignarol')}}">Asignar rol</a></li>
                    </ul>
                  </li>
                </ul>
              
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Parte informativa <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route ('welcome')}}">Inicio</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
        
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('admin/images/img.jpg') }}" alt="">Admin
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="#"><i class="fa fa-sign-out pull-right"></i> Cerrar sesión</a>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green"></span>
                  </a>
                  
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        
        <!-- page content -->
        <div class="right_col" role="main">
        
          <!--  Container    -->
          @yield('content')

        </div>
        <!-- /page content -->
        

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <a href="{{ route ('welcome') }}">Ecomuseo de las Minas de Abangares</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('admin/vendor/nprogress/nprogress.js') }}"></script>
    <!-- PNotify --> 
    <script src="{{ asset('admin/vendor/pnotify/pnotify.js') }}"></script>
    <script src="{{ asset('admin/vendor/pnotify/pnotify.buttons.js') }}"></script>
    <script src="{{ asset('admin/vendor/pnotify/pnotify.nonblock.js') }}"></script>
	  <!-- Datatables -- >
    <script src="{{ asset('admin/vendor/datatables.jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatablesdataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/responsive.bootstrap.js') }}"></script>
    <! -- Custom Theme Scripts -->
    <script src="{{ asset('admin/js/custom.min.js') }}"></script>

    @yield('js')

  </body>

</html>