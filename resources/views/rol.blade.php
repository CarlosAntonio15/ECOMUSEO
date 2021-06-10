<<<<<<< HEAD
<title>Roles
</title>
    </br></br>
    <div style="background-image: url('/img/collage.jpeg'); " >
      @if( Auth::user()->rol==1 or Auth::user()->rol==2)
      @extends('layouts.main')
      @extends('layouts.app')
      @section('content')

  <div class="container">
      <div class="row justify-content-center">
      <div class="col-md-20">
        </br></br></br></br>
        <div class="card">
          <div class="card-header">Asignar rol</div>
=======
<title>Roles</title>
@if( Auth::user()->rol==1 or Auth::user()->rol==2)
@extends('layouts.adminlayout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header">Asignar rol</div>
>>>>>>> 03be68e9caba48fcf65250246fa5624fc968c925

                  <div class="card-body">
                      <table class="table table-hover table-striped">
                          <thead>
                              <tr>
                                  <th>id</th>
                                  <th>Nombre</th>
                                  <th>Correo</th>
                                  <th>Rol</th>
                                  <th>Asignar permisos</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($user as $usuarios)
                              <tr>
                                  <td>{{ $usuarios->id }}</td>
                                  <td>{{ $usuarios->name }}</td>
                                  <td>{{ $usuarios->email }}</td>
                                  <td>
                                      @if( $usuarios->rol == 1 )Super administrador @endif
                                      @if( $usuarios->rol == 2 )Administrador @endif
                                      @if( $usuarios->rol == 3 )Usuario @endif</td>
                                  <td>
                                      <a href="{{ route('usuario.showrol', ['id' => $usuarios->id]) }}" class="btn btn-warning">Asignar</a>
                                  </td>
                              </tr>
                              @endforeach
                          </tbody>
                          <div class="card-header">
                              <div class="row">
                                <div class="col-sm-6">
                                  <h4 style="color: green"><b>Lista de usuarios: </b></h4>
                                </div> 
                                <div class="col-sm-6">
                                  <a href="{{ url('administracion') }}" class="btn btn-primary float-right">Regresar</a>
                                </div>
                              </div> 
<<<<<<< HEAD
                            </div>
                      </table>
                  </div>
              </div>
              </br></br></br></br></br></br></br></br></br>
          </div>
      </div>
  </div>

=======
                              <div class="col-sm-6">
                                <a href="{{ url('administracion') }}" class="btn btn-primary float-right">Regresar</a>
                              </div>
                            </div> 
                          </div>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
>>>>>>> 03be68e9caba48fcf65250246fa5624fc968c925
</section>
@endsection

@endif

@if( Auth::user()->rol==3 )

<div class="contenedor">
<br><br><br><br><br><br>
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <div class="form-body">
                    <div class="col-12">
                        <div class="form-group">
                            <br>
                            <h2 style="color: red" class="card-title">Acceso denegado, comuniquese con el administrador. </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif