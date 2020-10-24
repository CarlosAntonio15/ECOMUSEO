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
    
  <?php $page = 'nosotros'; ?>
  <br><br><br>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <div class="container" data-aos="fade-up">
                <!-- ======= About Section ======= -->
                <section id="about" class="about section-bg">
                    <div class="container" data-aos="fade-up">

                      <div class="section-title">
                       <!-- <h2>Sobre Nosotros</h2>-->
                        <h3>Descubre más sobre nosotros</h3>
                        <!--<p>DISPONIBLE PARA AGREGAR INFORMACION1</p>-->
                      </div>
                      <div>
                                <h5>¿Quiénes somos?</h5>
                                <p>
                                El Ecomuseo de las Minas de Abangares se fundó en 1991, y se encuentra localizado
                                precisamente donde existió la planta de procesamiento de oro, rescatando así edificaciones y
                                maquinaria que se utilizó en la época de la “fiebre del oro”. Además, posee gran diversidad
                                que albergan 38 hectáreas del Ecomuseo, a su vez impresionantes atractivos históricos que
                                se encuentran en él; como evidencia del desarrollo que hubo durante el periodo de
                                industrialización de la actividad minera de Abangares. Aunque en años anteriores, el
                                Ecomuseo había caído en el abandono; la situación se revirtió gracias a la colaboración de
                                las Municipalidad de Abangares, junto con el trabajo y esfuerzo de La Junta Administradora
                                del Ecomuseo y de las Universidades Públicas de la Región.
                                </p>
                            </div>
                            <br>
                            <div>
                                <h5>Objetivo Principal:</h5>
                                <p>
                                El Ecomuseo de las Minas de Abangares tiene como objetivo principal rescatar,
                                fortalecer y recuperar el patrimonio histórico de la minería en Costa Rica, resguardando los
                                artefactos que se utilizaron en esa época e integrándolo al desarrollo turístico de la zona.
                                Además, la Ley 8596 ampara la creación del Ecomuseo de las Minas de Abangares, la cual
                                decreta la creación y su autorización para una efectiva administración.
                                </p>
                            </div>
                            <br>
                      <div class="row">
                        <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
                          <img src="img/EcoAbangares.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                          <!-- <h3>DISPONIBLE PARA INFORMACION SUBTITULO2.</h3>
                          <p class="font-italic">
                            DSIPONIBLE PARA INFORMACION(TEXTO) 3
                          </p>-->
                          <ul>
                            <li>
                              <!--<i class="bx bx-store-alt"></i>-->
                              
                            <div>
                                <h5>Misión</h5>
                                <p>
                                Somos un espacio de protección y resguardo del patrimonio histórico-cultural minero
                              de Costa Rica donde se fortalece la economía e identidad del cantón de Abangares.
                                </p>
                            </div>
<br>
                            <!--<i class="bx bx-images"></i>-->
                              <div>
                                <h5>Visión</h5>
                                <p>Ser el motor socioeconómico y cultural del cantón de Abangares, una organización
                                  autosustentable que promueve el turismo histórico-cultural de Guanacaste a nivel nacional e
                                  internacional, por medio de la excelencia y la mejora continua.</p>
                              </div>
                            </li>
                            <li>
                            </li>
                          </ul>            
                        </div>
                      </div>
                      <div>
                      <br>
                        <h5>Valores</h5>
                            <p>Ética: Es una virtud que conlleva a la responsabilidad, la honestidad, el compromiso, a ser
                                buenos ciudadanos y de evitar afectar de manera negativa a quienes están alrededor, en
                                especial si se trata de obtener un beneficio en particular.</p>
                            <p>Entrega: Consiste en hacer que los clientes salgan satisfechos, es asegurarse que cada cliente 
                                que pagó por el servicio turístico quede satisfecho por la prestación brindada.</p>
                            <p>Esfuerzo: Este es el valor de luchar por las cosas que se quieren en la organización, es una
                                cualidad muy positiva que deben de tener todos los funcionarios.</p>
                            <p>Honestidad: Es una cualidad de los seres humanos, es aquella que procura siempre anteponer
                                la verdad en sus pensamientos, expresiones y acciones.</p>
                        </div>
                        <div>
                      <br>
                        <h5>Ubicación</h5>
                            <p>
                            Localizado al sureste de la provincia de Guanacaste, el cantón de Abangares limita al
                            norte con Tilarán; al sur con el cantón central de Puntarenas y el golfo de Nicoya; al
                            este con el cantón de Miramar y la parte central de la provincia de Puntarenas,
                            mediado por el río Lagarto; al oeste, con la localidad de Cañas, bordeado por el río
                            Lajas.
                            </p>
                        </div>
                      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                          <p></p>
                          <img src="img/avistamiento.jpg" class="rounded float-righ img-fluid" alt="...">

                        </div>
                      </div>

                        <hr>

                    </div>
              
                </section>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br><br>

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