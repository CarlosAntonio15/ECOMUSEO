<title>Formulario voluntariado</title>
<div style="background-image: url('/img/rueda.jpg'); " >
@extends('layouts.web')
@section('title','Create Voluntary')
@section('content')

 <!-- Vendor CSS Files -->


  <!-- Template Main CSS File -->
  

<!--< ?php $page = 'createVol'; ?>-->
<div class="container">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
    <div class="row justify-content-center">
        <div class="col-md-6">
           <!-- <div class="card">-->
           <!-- <div class="container" data-aos="fade-up">-->
              <div class="row mt-8">
                <div class="col-sm-10 offset-sm-1">
                  <form action="{{route('voluntary.store')}}" method = "post">
                  @csrf
                  <div class="card-header"><h4 style="color:  rgb(243, 236, 236)" align="center">Formulario Voluntariado</h4></div>

<div class="row">
  <div class="col-md-12">
 
    <div class="form-group">
      <label for="Nombre"><h5 style="color:  rgb(243, 236, 236)" align="center">Ingrese los datos que se le sean solicitados para procesar su solicitud..</h5></label>
    </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
          <label for="Nombre"><h5 style="color:  rgb(243, 236, 236)" align="center">Nombre completo:</h5></label>
          <input type="text" name = "Nombre" id = "Nombre" class="form-control" required>
        
        </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label for="Apellido_1"><h5 style="color:  rgb(243, 236, 236)" align="center">Primer Apellido:</h5></label>
        <input type="text" name = "Apellido_1" id = "Apellido_1" class="form-control" required>
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label for="Apellido_2"><h5 style="color:  rgb(243, 236, 236)" align="center">Segundo Apellido:</h5></label>
        <input type="text" name = "Apellido_2" id = "Apellido_2" class="form-control" required>
      </div>
    </div>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="form-group">
      <label for="Edad"><h5 style="color:  rgb(243, 236, 236)" align="center">Edad:</h5></label>
      <input type="number" min="1"name = "Edad" id = "Edad" class="form-control" required>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-group">
      <label for="Telefono"><h5 style="color:  rgb(243, 236, 236)" align="center">Teléfono de contacto:</h5></label>
      <input type="tel" name = "Telefono" id = "Telefono" class="form-control" required>
    </div>
  </div>


</div>


<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label for="Direccion"><h5 style="color:  rgb(243, 236, 236)" align="center">Dirección:</h5></label>
      <input type="text" name = "Direccion" id = "Direccion" class="form-control" required>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label for="Email"><h5 style="color:  rgb(243, 236, 236)" align="center">Email:</h5></label>
      <input type="text" name = "Email" id = "Email" class="form-control" required>
    </div>
  </div>

</div>

<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="Descripcion"><h5 style="color:  rgb(243, 236, 236)" align="center">Ingrese la actividad en la que desea ser voluntario:</h5></label>
      <input type="text" name = "Descripcion" id = "Descripcion" class="form-control" required>
   
      
    </div>
  </div>
</div>

<div>
<button type = "submit" class = "btn btn-success">Procesar solicitud</button>
<input type="button" class = "btn btn-secondary" onclick="history.back()" name="Atrás" value="Atrás">
</div>
<br/>

                  </form>
                </div>


                </div>
              <!--</div>-->
           <!-- </div>-->
         </div> 
        </div>
      </div>
    </div>
  </div>

  <!-- Vendor JS Files -->


  <!-- Template Main JS File -->


@endsection