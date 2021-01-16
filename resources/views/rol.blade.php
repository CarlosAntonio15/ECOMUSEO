@extends('layouts.main')
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
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
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
