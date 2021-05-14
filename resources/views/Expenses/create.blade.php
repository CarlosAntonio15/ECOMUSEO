<title>CONTROL DE EGRESOS</title>
@extends('layouts.app')
@section('title','Registrar egreso')
@section('content')

 <!-- Vendor CSS Files -->
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="vendor/venobox/venobox.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

<!--< ?php $page = 'createVol'; ?>-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
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


                    @if(!empty($expense))
            {!! Form::model($expense, ['route' => ['expense.update', $expense->id], 'method'=>'put']) !!}
        @else
            {!! Form::open(['route' => 'expense.store', 'method'=>'post']) !!}
        @endif
            <div class="row mt-5">
                <div class="col-sm-8 offset-sm-2">          
                    <h5 style="color: rgba(14, 90, 20, 0.89)" align="center">Formulario Control de Egresos </h5>

                    

                    <div class="row">
                        <div class="col-md-9">
                                <label for="date"><h6>Fecha de egreso:</h6></label>
                                <br/>
                                 <input type="date" name = "date" id = "date" class="form-control" required>
                             </div>
                    </div>
                       

                    <div class="row">
                        <div class="col-md-9">
                                {!! Form::Label('voucher', 'Numero de factura') !!}
                                {!! Form::text('voucher', null, ['placeholder' => 'Ingrese el numero de la factura', 'class' => 'form-control' ]) !!}
                    
                            </div>
                    </div>

                    
                    <div class="row">
                        <div class="col-md-9">
                            {!! Form::Label('description', 'Detalle') !!}
                            {!! Form::text('description', null, ['placeholder' => 'Ingrese el detalle del egreso', 'class' => 'form-control' ]) !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-9">
                            {!! Form::Label('responsable', 'Responsable') !!}
                            {!! Form::text('responsable', null, ['placeholder' => 'ingrese el Responsable ', 'class' => 'form-control' ]) !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                               {!! Form::Label('amount', 'Total') !!}
                                {!! Form::number('amount', null, ['placeholder' => 'Ingresa el total de egreso', 'class' => 'form-control' ]) !!}
                            </div>
                        </div>

                    </div>

                   
                       

                    <div class="form-group">
                        <button type="summit" class="btn btn-primary">
                            <i class="fas fa-save"></i> {{ !empty($expense) ? 'Actualizar ' : 'Guardar ' }}
                        </button>
                        <a href="{{ route('expense.index') }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-undo"></i> Atras
                        </a>
                    </div>
                    
                    <br/>
               
                </div>
            </div>

        {!! Form::close() !!}
              
                      
<br/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="vendor/jquery/jquery.min.js" asp-append-version="true"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js" asp-append-version="true"></script>
  <script src="vendor/jquery.easing/jquery.easing.min.js" asp-append-version="true"></script>
  <script src="vendor/php-email-form/validate.js" asp-append-version="true"></script>
  <script src="vendor/waypoints/jquery.waypoints.min.js" asp-append-version="true"></script>
  <script src="vendor/counterup/counterup.min.js" asp-append-version="true"></script>
  <script src="vendor/owl.carousel/owl.carousel.min.js" asp-append-version="true"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js" asp-append-version="true"></script>
  <script src="vendor/venobox/venobox.min.js" asp-append-version="true"></script>
  <script src="vendor/aos/aos.js" asp-append-version="true"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

@endsection