<title>Roles</title>
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
                          </div>
                    </table>
                </div>
            </div>
            </br></br></br></br></br></br></br></br></br>
        </div>
    </div>
</div>
</section>
@endsection

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