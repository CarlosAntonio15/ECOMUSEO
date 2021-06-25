<title>Asignar rol</title>
@if( Auth::user()->rol==1 or Auth::user()->rol==2)
@extends('layouts.adminlayout')
@section('content')


<section class="asignar-rol">
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                        <div class="col-md-4">
                            <h3>Asignar rol </h3>
                        </div>
                        <div class="col-md-4">
                            <h3>@yield('title') {{ $usuario->name }} </h3>
                        </div>
                    
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <form class="form form-vertical" action="{{ route('usuario.saverol') }}" method="POST">
                        @csrf
                        <div class="col-4">
                            <label>Seleccionar rol:
                            </label>
                            <div class="form-group">
                            <input type="hidden" name="id" value="{{ $usuario->id }}" />
                                <select name="rol" class="select2-border border-warning form-control" data-border-color="warning" data-border-variation="darken-2" data-text-color="warning" data-text-variation="darken-3">
                                    @if(Auth::user()->rol==1)<option value="1">Super administrador</option>@endif
                                    <option value="2">Administrador</option>
                                    <option value="3">Usuario</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">
                                <i class="fa fa-save"></i> Guardar cambios</button>
                                <a href="{{ url('asignarRol') }}" class="btn btn-secondary">
                                <i class="fa fa-undo"></i> Regresar</a>
                            </div>
                        </div>
                        
                        </div>
                    </form>
            
                </div>
            </div>
        </div>
    </div>  
</section>
@endsection

@endif

@if( Auth::user()->rol==3 )
    <@section('content')
        <!-- page content -->
        <div class="col-md-12">
            <div class="col-middle">
                <div class="text-center text-center">
                    <h1 class="error-number">403</h1>
                    <h2>Accesso denegado</h2>
                    <p>Se requiere autenticación completa para acceder a este recurso. <a href="{{ route('login') }}">Inicie sesión</a>
                    </p>
                    <div class="mid_center">
                        <h3>Search</h3>
                        <form>
                            <div class="  form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary" type="button">Go!</button>
                                        </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
    @endsection
@endif