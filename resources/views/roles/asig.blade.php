
@extends('layouts.app')
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
                        <label>Seleccionar permiso:
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
                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                <button type="submit" class="btn bg-gradient-primary mr-1 mb-1 waves-effect waves-light">Guardar
                                    cambios</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</section>
@endsection