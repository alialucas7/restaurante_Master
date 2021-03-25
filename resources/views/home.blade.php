<<<<<<< HEAD
@extends('layouts.plantilla')
@section('titulo','Inicio') //Este titulo se ve en la pestaña

@section('contenido')
    <h1>havkeeer putotoo ini</h1>
=======
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
>>>>>>> 52f88ac4aba732ad2410c432e291a7d93b0f5644
@endsection
