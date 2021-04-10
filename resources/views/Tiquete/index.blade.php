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
                    <div class="card-body">
                        <div class="row">
                        @forelse($entrada as $entrada)
                        <div class="table-responsive-md">
                            <table class="table">
                                
                                <thead>
                                    <tr>
                                        
                                        <th >Nombre</th>
                                        <th >Cantidad Adultos</th>
                                        <th >Cantidad niños</th>
                                        <th >Tipo tour</th>

                                        <th colspan="3">&nbsp;</th>
                                    </tr>
                                </thead>
                                
                                <tr class = "text-center">
                                    
                                    <td>{{ $entrada->nombre }}</td>
                                    <td>{{ $entrada->adultQuantity }}</td>
                                    <td>{{ $entrada->childrenQuantity }}</td>
                                    <td>{{ $entrada->tourType }}</td>
                                    
                                </tr>
                            </table>
                        </div>  

                        @empty
                            <h4> No existen tiquetes vendidos. </h4> 
                        @endforelse
                            
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection