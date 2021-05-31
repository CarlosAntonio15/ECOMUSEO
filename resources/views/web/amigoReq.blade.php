@extends('layouts.web')
@section('title', 'Hazte amigo del Ecomuseo')
@section('content')
   </br> </br> </br> </br> </br> </br> </br> 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-14">
                            <div class="section-title">
                                <h4>¡Hazte Amigo del ECOMUSEO de Abangares!</h4>
                            </div>
                            <div class="container" data-aos="fade-up">


                            <div class="card-body">
                            <div class="row">
                                <p class="text-justify">La Asociación Junta Administradora del Ecomuseo de Abangares ofrece el
                                                    programa Amigos del ECOMUSEO de Abangares, mediante el cual toda
                                                    persona que desee participar de las actividades que se desarrollen y poder gozar
                                                    de privilegios, promociones y descuentos especiales.
                                </p>

                            </div>
                        </div>
                    </div>
                   
                    <div class="row" data-aos="fade-up">
                        <div class="col-sm-6">
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
                        <div class="col-sm-6">
                           <div class="card-body">
                                <h5 class="card-title">Requisitos para ser voluntario</h5>
                                <p class="text-justify">
                                    1-	Ser mayor de edad para inscribirse en nuestro servicio de voluntariado.<br>
                                    2-	Si es menor de edad deberá inscribirlo una persona adulta encargado.<br>
                                    3-	Contar con transporte para asistir a nuestro complejo turístico ya que no se cuenta con medios suficientes para brindar dicho servicio.<br>
                                    4-	Traer alimentación propia debido a que el Ecomuseo no cuenta con un lugar adecuado para brindar alimentación.<br>
                                    5-	Asistir con ropa cómoda.<br>
                                </p>
                                <a href="{{ route('voluntary.create')}}" class="btn btn-primary">Voluntariado</a>
                                
                            </div>
                            </div>

<div class="container" data-aos="fade-up">

<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
    <img src="img/volun.jpeg" class="img-fluid" alt="">
    <div class="portfolio-info">
      <a href="img/volun.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Corredor Biológico"><i class="bx bx-plus"></i></a>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
    <img src="img/volun1.jpeg" class="img-fluid" alt="">
    <div class="portfolio-info">
      <a href="volun1.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
    <img src="img/volun2.jpeg" class="img-fluid" alt="">
    <div class="portfolio-info">
      <a href="img/volun2.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
    </div>
  </div>

</div>

</div>
                        </div>

      </div>
    </div>



@endsection