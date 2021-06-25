<title>Lista voluntarios</title>
@if( Auth::user()->rol==1 or Auth::user()->rol==2)
@extends('layouts.adminlayout')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Lista de voluntarios </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="x_content">
                        <div class="container" data-aos="fade-up">
                            <a href="{{route('createGus')}}" class="btn-sm btn-info">Nuevo voluntario</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    @if(Session::has('message'))
                        <div class="alert alert-info alert-dismissible " role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button>
                            {{ Session::get('message') }}
                        </div>
                    @endif
                </div>
                <div class="x_content">
                    <div class="card-body">
                        <div class="row">
                            @forelse($Volun as $voluntary)
                                <div class="col-md-4">
                                
                                    <div class="card-deck">
                                        <div class="col-dm-4 col-voluntary" >
                                            <div class="card voluntary" style="min-width: 18rem; max-width: 18rem;">
                                                <div class="card-body">
                                                    <h4 class="card-footer">
                                                        <i class="fa fa-user-user"></i>
                                                        &nbsp;{{ $voluntary-> Nombre }}
                                                        &nbsp;{{ $voluntary-> Apellido_1 }}
                                                        &nbsp;{{ $voluntary-> Apellido_2 }}
                                                    </h4>
                                                </div>
                                                
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item"><i class="fa fa-phone"></i>&nbsp;{{ $voluntary->Telefono }}</li>
                                                    <li class="list-group-item" 
                                                            style="display:block;text-overflow: ellipsis;width: 200px;overflow: hidden; white-space: nowrap;">
                                                                <i class="fa fa-location-arrow"></i>&nbsp;{{ $voluntary->Direccion }}</li>
                                                    <li class="list-group-item"><i class="fa fa-at"></i>&nbsp;{{ $voluntary->Email }}</li>
                                                </ul>

                                                <div class="card-footer">
                                                    <a href="{{ route('voluntary.show', [$voluntary->id]) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                                    <a href="{{ route('voluntary.edit', [$voluntary->id]) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                    <form action="/voluntario/delete/{{ $voluntary->id }}" class="d-inline formulario-eliminar" method="POST">
                                                    @csrf
                                                    @method('DELETE')</br>
                                                        <button class="btn btn-danger "><i class="fa fa-trash"></i></button>
                                                       
                                                    </form>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                        </div> 
                                    </div> 
                                </div>
                            @empty
                                <h5> No existen voluntarios agregados. </h5> 
                            @endforelse
                            
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        {!! $Volun->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $('.formulario-eliminar').submit(function(e){
                e.preventDefault();
                Swal.fire({
                title: 'Esta seguro?',
                text: "Esta reservacion se eliminara definitivamente",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar!',
                cancelButtonText: 'Cancelar',
                }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                    '¡Voluntario eliminado!',
                    'Su archivo ha sido eliminado.',
                    'success'
                    )
                    this.submit();
                }
            })
        });
    </script>
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