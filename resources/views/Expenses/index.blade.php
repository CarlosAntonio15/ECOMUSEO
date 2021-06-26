<title>Egresos</title>
@if( Auth::user()->rol==1 or Auth::user()->rol==2)
@extends('layouts.adminlayout')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Lista de egresos </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="x_content">
                        <div class="container" data-aos="fade-up">
                            <a href="{{route('expense.create')}}" class="btn-sm btn-primary"><i class="fa fa-plus-circle"></i> Egreso</a>
                            <a class="btn-sm btn-info" href="{{ url('/egresos/PDF') }}"><i class="fa fa-file-pdf-o"></i> Exportar PDF</a>
                            <a href="{{route('expense.grafica')}}" class="btn-sm btn-dark"><i class="fa fa-line-chart"></i> Gráficas</a>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible " role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button>
                            {{ Session::get('message') }}
                        </div>
                        
                    @endif
                    <div class="card-body">
                        <div class="table-responsive-md">
                            <table class="table table-striped table-bordered" style="width:100%" id="tiquetes">
                            
                                
                                <thead>
                                    <tr>
                                        <th> Fecha </th>
                                        <th >Voucher</th>
                                        <th >Descripción</th>
                                        <th >Responsable</th>
                                        <th >Total</th>

                                        <th colspan="3">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($expenseN as $egresos)
                                        <tr class = "text-center">
                                            <td> {{ $egresos->date }}</td>
                                            <td>{{ $egresos->voucher }}</td>
                                            <td>{{ $egresos->description }}</td>
                                            <td>{{ $egresos->responsable }}</td>
                                            <td>{{ $egresos->amount }}</td>
                                            <td>
                                                <a class="btn-sm btn-info" href="{{ url('/egresos/PDF', $egresos->id) }}"><i class="fa fa-file-pdf-o"></i></a>
                                            </td>
                                            <td>
                                                <form action="/egresos/delete/{{ $egresos->id }}" class="d-inline formulario-eliminar" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                        <button class="btn-sm btn-danger" ><i class="fa fa-trash"></i>
                                                        </button>  
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <h4> No existen tiquetes vendidos. </h4> 
                                    @endforelse
                                </tbody>
                            </table>
                        </div>  
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
                    '¡Egreso eliminado!',
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