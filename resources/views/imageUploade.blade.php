@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tabla de Datos') }}</div>
                <form method="POST" enctype="multipart/form-data" action="{{route('images.upload')}}">
                    @csrf
                    <input type="file" id="image" name="image">
                    <button class="btn btn-primary">Subir Imagen</button>
                </form>
            </div>
            <br>
            <div class="card-body card">
                <h5 class="card-title card-header">
                    Imagenes Almacenadas
                </h5>
                <div class="row">
                    @foreach(Storage::files('public/images/productos') as $file)
                    <div class="col-md-2">
                        <div>
                            <form action="{{route('imagesDelete', basename($file))}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <img src="{{asset(Storage::url($file))}}" class="img-thumbnail">
                                <button class="btn btn-danger eliminarImagen">Eliminar</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <br>
            <br>
            <div class="card-body card">
                <div class="card-header">{{ __('Archivos o Fcaturas') }}</div>
                <form method="POST" action="{{route('files.upload')}}">
                    @csrf
                    <input type="file" id="fileName" name="datafile">
                    <button class="btn btn-primary">Subir Archivo</button>
                </form>
                <div class="row">
                    
                    <div class="col-md-2">
                        <div>           
                        </div>
                    </div>
                    <!---->
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@if(session('success'))
<script>
    alert("{{session('success')}}")
</script>
@endif
@if(session('failed'))
<script>
    alert("{{session('failed')}}")
</script>
@endif
@endsection
