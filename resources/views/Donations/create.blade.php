<title>Formulario donaciones</title>
<div style="background-image: url('/img/rueda.jpg'); " >
@extends('layouts.form')
@section('title','Create Donation')
@section('content')

 <!-- Vendor CSS Files -->
 

  <!-- Template Main CSS File -->


<!--< ?php $page = 'createVol'; ?>-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <!--<div class="card">-->
            <div class="container" data-aos="fade-up">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<br/><br/>
<div class="card-header"><h5 style="color: rgb(243, 236, 236)" align="center">Formulario donaciones </h5></div>

              <div class="row mt-8">
                <div class="col-sm-12 offset-sm-0">
                  <form action="{{route('donation.store')}}" method = "post">
                    @csrf
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="name"><h5 style="color:  rgb(243, 236, 236)" align="center">Nombre donador:</h5></label>
                          <br/>
                          <input type="text" name = "name" id = "name" class="form-control" required>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="lastName"><h5 style="color:  rgb(243, 236, 236)" align="center">Apellidos:</h5></label>
                          <br/>
                          <input type="text" name = "lastName" id = "lastName" class="form-control" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="donationType"><h5 style="color:  rgb(243, 236, 236)" align="center">Tipo de donación:</h5></label>
                          <br/>
                          <input type="" name="donationType" value=""> <!--<h5>Contribución monetaria</h5>
                          <input type="" name="donationType" value="Material"> <h5>Material</h5> 
                          <input type="" name="donationType" value="Alimento"> <h5>Alimento</h5>--> 
                        </div>
                      </div>
                    </div>

                    <br/>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="quantity"><h5 style="color:  rgb(243, 236, 236)" align="center">Cantidad:</h5></label>
                          <br/>
                          <input type="number" min="1"name = "quantity" id = "quantity" class="form-control" required>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="currentDate"><h5 style="color:  rgb(243, 236, 236)" align="center">Fecha:</h5></label>
                          <br/>
                          <input type="date" name = "currentDate" id = "currentDate" class="form-control" required>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="phone"><h5 style="color:  rgb(243, 236, 236)" align="center">Teléfono de contacto:</h5></label>
                          <br/>
                          <input type="tel" name = "phone" id = "phone" class="form-control" required>
                        </div>
                      </div>

                    </div>
                    

                    <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="mail"><h5 style="color:  rgb(243, 236, 236)" align="center">Correo electrónico:</h5></label>
                            <br/>
                            <input type="email" name = "mail" id = "mail" class="form-control" >
                          </div>
                        </div>

                        <div class="col-md-8">
                          <div class="form-group">
                            <label for="description"><h5 style="color:  rgb(243, 236, 236)" align="center">Descripción:</h5></label>
                            <br/>
                             <input type="description" name = "description" id = "description" class="form-control" required>
                          </div>
                        </div>
                    </div>

                <div>
                    <button type = "submit" class = "btn btn-success">Guardar</button>
                    <input type="button" class = "btn btn-secondary" onclick="history.back()" name="Atrás" value="Atrás">
                </div>

                <br/>


          

                  </form>
                </div>
              </div>
            <!--</div>-->
          </div>
        </div>
      </div>
    </div>

  <!-- Vendor JS Files -->


  <!-- Template Main JS File -->


@endsection