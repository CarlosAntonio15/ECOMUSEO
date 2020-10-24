@extends('layout')
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
 Apellido: {!! $VoluntaryB->telefono !!}
 <br>
 Apellido: {!! $VoluntaryB->direccion !!}
 <br>
 Apellido: {!! $VoluntaryB->email !!}
 <br>
 Apellido: {!! $VoluntaryB->descripcion !!}
 </div>
@endsection