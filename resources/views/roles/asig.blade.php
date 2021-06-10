<title>Asignar rol</title>
@if( Auth::user()->rol==1 or Auth::user()->rol==2)
@extends('layouts.adminlayout')
@section('content')


<section class="asignar-rol">
    <div class="card">
        <br>
        
        <div class="card-header">
            <h1 class="card-title">@yield('title') {{ $usuario->name }} </h1>
        </div>
        <div class="card-content">
            <div class="card-body">
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

                    <div class="form-body">
                        <div class="row">
                            <div class="col-sm-6">
                            <button type="submit" class="btn btn-success">Guardar cambios</button>
                            <a href="{{ url('asignarRol') }}" class="btn btn-primary float-right">Regresar</a>
                            </div>
                        </div>
                       
                    </div>
                </form>
           
            </div>
        </div>
    </div>
    
</section>
@endsection

@endif

@if( Auth::user()->rol==3 )


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
@endif