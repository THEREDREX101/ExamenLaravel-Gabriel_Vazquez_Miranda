@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tabla de Datos') }}</div>
                <form action="{{route('home.store')}}" method="post">
                    @csrf
                <div class="card-body">
                <div>
                    <label class="col-md-4 col-form-label text-md-end" for="nombre">Nombre: </label>
                    <input type="text" name="nombre" id="nombre" required>
                </div>
                <div>
                    <label class="col-md-4 col-form-label text-md-end" for="marca">Marca: </label>
                    <input type="text" name="marca" id="marca" required>
                </div>
                <div>
                    <label class="col-md-4 col-form-label text-md-end" for="precio">Precio: </label>
                    <input type="text" name="precio" id="precio" required>
                </div>
                <div>
                    <label class="col-md-4 col-form-label text-md-end" for="cantidad">Cantidad: </label>
                    <input type="text" name="cantidad" id="cantidad" required>
                </div>
                <br>
                    <button  type="submit" class="btn btn-primary">Agregar</button>
                </form>                    
                    <table>
                        <thead>
                            <tr>
                                <th>Nombre</th>     
                                <th>Marca</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($producto as $producto)
                            <tr>
                                <td>{{ $producto->nombre}}</td>
                                <td>{{ $producto->marca}}</td>
                                <td>{{ $producto->precio}}</td>
                                <td>{{ $producto->cantidad}}</td>
                                <td>
                                    <form action="{{route('home.destroy',$producto)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                                <td>
                                    <button id="editar" class="btn btn-warning">Editar</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<dialog id="favDialog">
    <!--ISSET sirve verifica si la variable $producto está definida y no es null.-->
    <!--verifica si $producto es una instancia de la clase losproductos
    Esto se utiliza para garantizar que la variable $producto sea del tipo correcto antes de acceder a sus propiedades o métodos.-->
    @if(isset($producto) && $producto instanceof \App\Models\losproductos)
        <form action="{{ route('home.update', $producto->id) }}" method="post" enctype="multipart/form-data">
            <div class="card-body">
                @csrf
                <div>
                    <label class="col-md-4 col-form-label text-md-end" for="nombre">Nombre: </label>
                    <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}" required>
                </div>
                <div>
                    <label class="col-md-4 col-form-label text-md-end" for="marca">Marca: </label>
                    <input type="text" name="marca" id="marca" value="{{ $producto->marca }}" required>
                </div>
                <div>
                    <label class="col-md-4 col-form-label text-md-end" for="precio">Precio: </label>
                    <input type="text" name="precio" id="precio" value="{{ $producto->precio }}" required>
                </div>
                <div>
                    <label class="col-md-4 col-form-label text-md-end" for="cantidad">Cantidad: </label>
                    <input type="text" name="cantidad" id="cantidad" value="{{ $producto->cantidad }}" required>
                </div>
                <div>
                    <input type="hidden" name="id" value="{{ $producto->id }}" >
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <button id="cerrar" class="btn btn-danger">Cerrar</button>
                </div>
            </div>
        </form>
    @endif
</dialog>


@endsection
