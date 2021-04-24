<title>Tiquete</title>
@extends('layouts.app')
@section('content')

<div class = "container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Lista de tiquetes comprados</div>
                    <div class="col-sm-12">
                        </br>
                        <a href="{{route('tiquete.create')}}" class="btn btn-info"> Tiquete compra</a>
                        <a href="{{route('administracion')}}" class="btn btn-secondary">Atrás</a>    
                    </div>

                    @if(Session::has('message'))
                        <p class="alert {{Session::get('alert-class', 'alert-info') }}">
                            {{ Session::get('message') }}
                            <a class="btn btn-primary" href="{{ url('/tiquete/PDF', Session::get('id') )}}">Export to PDF</a>
                        </p>
                      
                    @endif
                    <div class="d-flex justify-content-end mb-4">
                        <a class="btn btn-primary" href="{{ url('/tiquete/PDF') }}">Export All PDF</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        @forelse($entradas as $entrada)
                        <div class="table-responsive-md">
                            <table class="table" id="tiquetes">
                                
                                <thead>
                                    <tr>
                                        <th> ID </th>
                                        <th >Nombre</th>
                                        <th >Cantidad Adultos</th>
                                        <th >Cantidad niños</th>
                                        <th >Tipo tour</th>
                                        <th> Descarga </th>

                                        <th colspan="3">&nbsp;</th>
                                    </tr>
                                </thead>
                                
                                <tr class = "text-center">
                                    <td> {{ $entrada->id }}</td>
                                    <td>{{ $entrada->nombre }}</td>
                                    <td>{{ $entrada->adultQuantity }}</td>
                                    <td>{{ $entrada->childrenQuantity }}</td>
                                    <td>{{ $entrada->tourType }}</td>
                                    <td> 
                                        <a class="btn btn-primary" href="{{ url('/tiquete/PDF', $entrada->id) }}">Export to PDF</a>
                                    </td>
                                </tr>
                            </table>
                        </div>  

                        @empty
                            <h4> No existen tiquetes vendidos. </h4> 
                        @endforelse
                            
                        
                        
                    </div>
                    <div class="d-flex justify-content-center">
                        {!! $entradas->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('#tiquetes').DataTable();
} );
</script>

@endsection