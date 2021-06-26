<title>Compra de tiquete</title>
@if( Auth::user()->rol==1 or Auth::user()->rol==2)
    @extends('layouts.adminlayout')
    @section('content')
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Tiquete <small>Venta</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="container" data-aos="fade-up">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if(!empty($tiquete))
                                {!! Form::model($tiquete, ['route' => ['tiquete.update', $tiquete->id], 'method'=>'put']) !!}
                            @else
                                {!! Form::open(['route' => 'tiquete.store', 'method'=>'post']) !!}
                            @endif
                                <div class="row mt-8">
                                    <div class="col-sm-8 offset-sm-2">  

                                        <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        {!! Form::label('Nombre', 'Nombre completo') !!}
                                                        {!! Form::text('nombre', null, [ 'class' => 'form-control']) 
                                                        !!}
                                                    </div>
                                                </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                {!! Form::Label('adultQuantity', 'Cantidad de adultos') !!}</h5>
                                                {!! Form::number('adultQuantity', 0, ['class' => 'form-control', 'id' => 'Adult', 'onkeyup'=>"suma();" ]) !!}
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                {!! Form::Label('childrenQuantity', 'Cantidad de niños') !!}
                                                {!! Form::number('childrenQuantity', 0, ['class' => 'form-control', 'id' => 'Childrent', 'onkeyup'=>"suma();" ]) !!}
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {!! Form::Label('total', 'Total(Colones)') !!}
                                                    {!! Form::number('total', 0, [ 'class' => 'form-control', 'id' => 'total'  ]) !!}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">

                                            {!! Form::Label('tourType', 'Tipo de tour') !!}
                                                    <br>
                                                {!! Form::radio('tourType', 'Senderismo') !!} Senderismo y hiking
                                                    {!! Form::radio('tourType', 'AvistamientoAves') !!} Avistamiento de ave
                                                {!! Form::radio('tourType', 'MuseoAntiguedades') !!} Museo con exhibición permanente
                                                    <br>
                                                    {!! Form::radio('tourType', 'AuditorioEventos') !!} Auditorio de eventos
                                                    {!! Form::radio('tourType', 'ToursGuiados') !!} Tours guiados
                                                    {!! Form::radio('tourType', 'GaleríaPH') !!} Galería de piezas históricas

                                                </div>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <button type="summit" class="btn-md btn-success">
                                                <i class="fa fa-save"></i> {{ !empty($voluntary) ? 'Actualizar ' : 'Guardar ' }}
                                            </button>
                                            <a href="{{ route('tiquete.index') }}" class="btn-sm btn-secondary">
                                                <i class="fa fa-reply"></i> Atras
                                            </a>
                                        </div>

                                    </div>    
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var suma = function(){
                var inputAdulto = document.getElementById("Adult")
                var inputChildrent = document.getElementById("Childrent")
                if(!inputAdulto)return
                if(!inputChildrent)return
                var Adult = parseInt(inputAdulto.value);
                var Childrent = parseInt(inputChildrent.value);
                var Resultado = Adult * 1000 + Childrent * 500;
                

                document.getElementById('total').value = Resultado;

            }
        </script>

        <script>
            function sumar(){
                var inputAdulto = document.getElementById("Adult")
                var inputChildrent = document.getElementById("Childrent")
                if(!inputAdulto)return
                if(!inputChildrent)return
                var Adult = parseInt(inputAdulto.value);
                var Childrent = parseInt(inputChildrent.value);
                var Resultado = Adult * 1000 + Childrent * 500;
                
                document.getElementById('total').value = Resultado;

            }
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