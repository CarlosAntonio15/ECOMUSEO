<title>Lista donaciones</title>
@if( Auth::user()->rol==1 or Auth::user()->rol==2)
    @extends('layouts.adminlayout')
    @section('content')
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Lista de donaciones </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>
                        <div class="x_content">
                            <div class="container" data-aos="fade-up">
                                <a href="{{route('give.create')}}" class="btn-sm btn-primary"><i class="fa fa-plus-circle"></i> Donación</a>
                                <a class="btn-sm btn-info" href="{{ url('/give/PDF') }}"><i class="fa fa-file-pdf-o"></i> Exportar PDF</a>
                                <a href="{{route('give.grafica')}}" class="btn-sm btn-dark"><i class="fa fa-line-chart"></i> Gráficas</a>
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
                                @forelse($give as $give)
                                    <div class="col-md-4">
                                        <div class="card-deck">
                                            <div class="col-dm-4 col-voluntary" >
                                                <div class="card voluntary" style="min-width: 16rem; max-width: 16rem;">
                                                    <div class="card-body">
                                                        
                                                        <h5 class="card-header">
                                                            <i class="fa fa-user"></i>
                                                            &nbsp;{{ $give-> name }}
                                                            &nbsp;{{ $give-> lastname }}
                                                        </h5>
                                                    
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item"><i class="fa fa-money">&nbsp;</i>{{ $give->donationType }}</li>
                                                            <li class="list-group-item"><i class="fa fa-comment"></i>&nbsp;{{ $give->description }}</li>
                                                            <li class="list-group-item" 
                                                                style="display:block;text-overflow: ellipsis;width: 200px;overflow: hidden; white-space: nowrap;">
                                                                    <i class="fa fa-phone"></i>&nbsp;{{ $give->phone }}</li>
                                                        </ul>

                                                        <div class="card-footer">
                                                            <a href="{{ route('give.show', [$give->id]) }}" class="btn-sm btn-primary"><i class="fa fa-eye"></i>&nbsp;</a>
                                                            <a href="{{ route('give.edit', [$give->id]) }}" class="btn-sm btn-warning"><i class="fa fa-edit"></i>&nbsp;</a>
                                                            <a class="btn-sm btn-info" href="{{ url('/give/PDF', $give->id) }}"><i class="fa fa-file-pdf-o"></i>&nbsp;</a>
                                                            <form action="/give/delete/{{ $give->id }}" class="d-inline formulario-eliminar" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                                <button class="btn-sm btn-danger "><i class="fa fa-trash"></i></button>
                                                            </form>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div> 
                                    </div>
                                @empty
                                    <h4> No existen donaciones agregadas. </h4> 
                                @endforelse
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    @endsection
@endif
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
                    '¡Donación eliminada!',
                    'Su archivo ha sido eliminado.',
                    'success'
                    )
                    this.submit();
                }
            })
        });
    </script>
@endsection
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