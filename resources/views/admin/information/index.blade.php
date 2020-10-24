<div class="panel-body">
 
    @if(Session::has('message'))
    <div class="alert alert-primary" role="alert">
        {{ Session::get('message') }}
    </div>
    @endif
 
    <a href="{{ route('admin/information/create') }}" class="btn btn-success mt-4 ml-3">  Agregar
                  </a>
 
    <section class="example mt-4">

    @if(Session::has('message'))
    <div class="alert alert-primary" role="alert">
        {{ Session::get('message') }}
    </div>
    @endif

    
        <div class="table-responsive">
 
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>Image</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($information as $bic)
                    <tr>
                        <td class="v-align-middle">{{$bic->name}}</td>
                        <td class="v-align-middle">
                            <img src="../uploads/{{$bic->imageinformation()->first()->name}}" width="30" class="img-responsive">
                        </td>
                        <td class="v-align-middle">
 
                            <form action="{{ route('admin/information/delete',$bic->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">
 
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button onclick="location.href='{{ url('admin/information/details', [$bic->id]) }}'" href="" type="button" class="btn btn-dark">Ver</button>
 
                                <a href="{{ route('admin/information/edit',$bic->id) }}" class="btn btn-primary">Editar</a>
 
                                <button type="submit" class="btn btn-danger">Eliminar</button>
 
                            </form>
 
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
 
        </div>
    </section>
 
</div>