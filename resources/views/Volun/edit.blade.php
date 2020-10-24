@extends('layout.app')

 @section('content')

 <div class="col-sm-8">

 Editar voluntario

 <a href="{​​{​​ route('voluntary')}​​}​​" class="btn btn-default pullright">

 Listado</a>

 @include('voluntary.fragments.errors')

 {​​!! Form::model($VoluntaryU, ['route'=>['voluntary.update', $VoluntaryU-

 >id], 'method'=> 'PUT' ]) !!}​​

 @include('voluntary.fragments.form')

 {​​!!Form::close()!!}​​

 </div>

 @endsection