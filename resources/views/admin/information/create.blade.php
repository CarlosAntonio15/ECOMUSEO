<div class="panel-body">
 
    {{-- {{ $message=Session::get('message') }} @include('alerts.request') --}}
 
    <section class="example mt-4">
 
        <form method="POST" action="{{ route('admin/information/store') }}" role="form"  enctype="multipart/form-data">
 
            {{-- <input type="hidden" name="_method" value="PUT"> --}}
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}">  --}}
            @method('PUT')
            @csrf

           
            
            @include('admin.information.frm.prt') 
 
        </form>
 
    </section>
 
</div>