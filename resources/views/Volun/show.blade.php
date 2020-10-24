@extends('layout.app')
@section('content')
 <div class="col-sm-8">

 ID: {{ $VoluntaryB->id }}
 <br>
 Nombre: {{ $VoluntaryB->nombre }}
 <br>
 Apellido: {!! $VoluntaryB->apellido1 !!}
 <br>
 Apellido: {!! $VoluntaryB->apellido2 !!}
 <br>
 Edad: {!! $VoluntaryB->edad !!}
 <br>
 Apellido: {!! $VoluntaryB->telefono !!}
 <br>
 Apellido: {!! $VoluntaryB->direccion !!}
 <br>
 Apellido: {!! $VoluntaryB->email !!}
 <br>
 Cantidad: {!! $VoluntaryB->cantidad !!}
 <br>
 Apellido: {!! $VoluntaryB->descripcion !!}
 </div>
@endsection

