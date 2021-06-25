<title>Roles</title>
@if( Auth::user()->rol==1 or Auth::user()->rol==2)
@extends('layouts.adminlayout')
@section('content')
    <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Lista de usuarios </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
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
                                        <td>
                                            <form action="/deleterol/ $usuarios->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                    <button class="btn-sm btn-danger"><i class="fa fa-trash"></i>
                                                    </button>  
                                            </form>
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
                                            <a href="{{ url('administracion') }}" class="btn-sm btn-primary float-right">Regresar</a>
                                        </div>
                                    </div> 
                                </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection

@endif


@if( Auth::user()->rol==3 )
    @section('content')
        <!-- page content -->
        <div class="col-md-12">
            <div class="col-middle">
                <div class="text-center text-center">
                    <h1 class="error-number">403</h1>
                    <h2>Accesso denegado</h2>
                    <p>Se requiere autenticación completa para acceder a este recurso. <a href="{{ route('login') }}">Inicie sesión</a>
                    </p>
                    <div class="mid_center">
                        <h3>Ecomuseo</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
    @endsection
@endif