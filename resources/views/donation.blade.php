<title>Formulario donaciones</title>
@if( Auth::user()->rol==1 or Auth::user()->rol==2)
@extends('layouts.app')
@section('content')

    <?php $page='donation';?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h4>Donaciones</h4>
                        
                        <a href="{{ route('donation.create') }}" class="btn btn-info float-rigth">
                            <i class="fas fa-plus"></i>Nueva donación
                        </a>
                        <a href="{{route('administracion')}}" class="btn btn-secondary">Atrás</a>
                    </div>

                    <div class="row">
        @forelse($donationN as $donation)
            <div class="col-md-4">
            
                <div class="card-deck">
                    <div class="col-dm-4 col-voluntary" >
                        <div class="card voluntary" style="min-width: 18rem; max-width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-footer">
                                    <i class="fas fa-user-circle"></i>
                                    &nbsp;{{ $donation-> name }}
                                    &nbsp;{{ $donation-> lastname }}
                                </h5>
                            </div>
                            
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-birthday-cake">&nbsp;</i>{{ $donation->donationType }}</li>
                                <li class="list-group-item"><i class="fas fa-phone"></i>&nbsp;{{ $donation->phone }}</li>
                                <li class="list-group-item"><i class="fas fa-paper-plane"></i>&nbsp;{{ $donation->mail }}</li>
                                <li class="list-group-item"><i class="far fa-address-card"></i> &nbsp;{{ $donation->description }}</li>
                            </ul>

                            <div class="card-footer">
                                <a href="{{ route('donation.show', [$donation->id]) }}" 
                                    class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i>&nbsp;Ver más</a>
                                <a href="{{ route('donation.edit', [$donation->id]) }}" 
                                    class="btn btn-warning btn-sm"><i class="fas fa-edit"></i>&nbsp;Editar</a>
                                <form action="/donaciones/delete/{{ $donation->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')</br>
                                        <button class="btn btn-danger">
                                            <i class="fas fa-trash"></i>&nbsp;Eliminar
                                        </button>
                                </form>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
        @empty
            <h4>No existen donaciones agregadas.</h4> 
        @endforelse
                       </div>
                    </div>
                </div>
            </div>
            </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
        </div>
    </div>

@endsection


@endif
@if( Auth::user()->rol==3 )
@extends('layouts.main')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <br><br><br><br><br><br>
    <div class="contenedor">
        <div class="redAlert">
          <section>
            <h1 style="color: rgb(0, 0, 0)" class="card-title">*Acceso restringido, solo personal autorizado* </h1>
        </section>
        <div class="card-footer">
          <button class="btn btn-warning">
              <h1 class="logo mr-auto"><a href="{{route('welcome')}}">Atras<span></span></a></h1>
          </button>
        </div>
        </div>
      </div>
</body>

</html>
@endif

