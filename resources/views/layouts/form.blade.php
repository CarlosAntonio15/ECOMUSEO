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
    
        <!-- Custom Theme Style -->
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
                        <br />
                        <!-- sidebar menu a un LLLAAAAAADDDDOOOOOOOO -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>General</h3>
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-home"></i> Parte informativa<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="{{route ('welcome')}}">Inicio</a></li>
                                            <li><a href="{{route ('nosotros')}}">Sobre Nosotros</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="{{route('actividad')}}"><i  class="fa fa-table"></i> Actividades</a></li>

                                    <li><a><i class="fa fa-bar-chart-o"></i> Cooperar <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="{{route('amigoReq')}}">Voluntariado</a></li>
                                            <li><a href="{{route('realizarDonaciones')}}">Donaciones</a></
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /sidebar menu -->
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
                                        <img src="{{ asset('admin/images/img.jpg') }}">
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
            </div>    
            <footer>
                    <div class="pull-right">
                        <a href="{{ route ('welcome') }}">Ecomuseo de las Minas de Abangares</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            
        </div>

        <!-- jQuery -->
        <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <!-- NProgress -->
        <script src="{{ asset('admin/vendor/nprogress/nprogress.js') }}"></script>
        <!-- Custom Theme Scripts -->
        <script src="{{ asset('admin/js/custom.min.js') }}"></script>
	
    </body>

</html>