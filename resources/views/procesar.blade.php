@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Tabla de Datos') }}</div>
                    <form method="POST" action="{{ route('procesar') }}">
                        @csrf
                        <input type="text" id="texto" name="texto" class="form-control">
                        <button type="submit" class="btn btn-primary">Revisar</button>
                    </form>
                    <br>

                    @if (isset($texto_limpio))
                        <h5>Texto Limpio</h5>
                        <div class="alert alert-success" role="alert">
                            {{ $texto_limpio }}
                        </div>
                    @endif

                    @if (isset($texto_encryptado))
                        <h5>Texto Encryptado Unidireccional</h5>
                        <div class="alert alert-success" role="alert">
                            {{ $texto_encryptado }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
