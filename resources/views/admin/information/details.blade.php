<div class="content-box-large">
 
    <div class="panel-heading">
 
        <div class="panel-title">
            <h2>{{ $information->name }}</h2></div>
 
    </div>
 
    <div class="panel-body">
 
        <section class="example mt-4">          
 
            <br>
            <br>
 
            <strong>Creado:</strong>
            <br> {{ $information->created_at }}
 
            <br>
            <br>
 
            <strong>edit:</strong>
            <br> {{ $information->updated_at }}
 
            <br>
            <br>
 
            <strong>Galería de Imágenes:</strong>
            <br>
 
            <!-- Mostramos todas las imágenes pertenecientes a a este registro -->
            @foreach($image as $img)
 
                <a data-fancybox="gallery" href="../../../uploads/{{ $img->name }}">
                    <img src="../../../uploads/{{ $img->name }}" width="200" class="img-fluid"> 
                </a> 
 
            @endforeach
 
            <br><br>
 
            <a href="{{ route('admin/information') }}" class="btn btn-dark">Volver</a>
 
        </section>
 
    </div>
 
</div>