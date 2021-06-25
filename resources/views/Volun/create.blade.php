<title>Formulario voluntariado</title>
@extends('layouts.form')
@section('title','Create Voluntary')
@section('content')

<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Voluntariado <small>Formulario</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
    
      <form action="{{route('voluntary.store')}}" method = "post">
        @csrf
          
            <div class="row">
              <div class="col-md-12">
            
                <div class="form-group">
                  <label for="Nombre"><h5>Ingrese los datos que se le sean solicitados para procesar su solicitud..</h5></label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                    <label for="Nombre"><h5>Nombre completo:</h5></label>
                    <input type="text" name = "Nombre" id = "Nombre" class="form-control" required>
                  
                  </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="Apellido_1"><h5>Primer Apellido:</h5></label>
                  <input type="text" name = "Apellido_1" id = "Apellido_1" class="form-control" required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="Apellido_2"><h5>Segundo Apellido:</h5></label>
                  <input type="text" name = "Apellido_2" id = "Apellido_2" class="form-control" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="Edad"><h5>Edad:</h5></label>
                  <input type="number" min="1"name = "Edad" id = "Edad" class="form-control" required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="Telefono"><h5>Teléfono de contacto:</h5></label>
                  <input type="tel" name = "Telefono" id = "Telefono" class="form-control" required>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="Direccion"><h5>Dirección:</h5></label>
                  <input type="text" name = "Direccion" id = "Direccion" class="form-control" required>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="Email"><h5>Email:</h5></label>
                  <input type="text" name = "Email" id = "Email" class="form-control" required>
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="Descripcion"><h5>Ingrese la actividad en la que desea ser voluntario:</h5></label>
                  <input type="text" name = "Descripcion" id = "Descripcion" class="form-control" required>
              
                  
                </div>
              </div>
            </div>

            <div class="ln_solid"></div>
            <div class="form-group">
              <button type = "submit" class = "btn btn-success"><i class="fa fa-save"></i> Procesar solicitud</button>
            
              <input type="button" class = "btn btn-secondary" onclick="history.back()" name="Atrás" value="Atrás">
            </div>
          <br/>
      </form>
    </div> 
  </div>
</div>

@endsection