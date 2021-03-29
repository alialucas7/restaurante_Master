@extends('layouts.plantilla')
@section('titulo','Inicio') 
<!-- minify -->
<link href="https://unpkg.com/nes.css@2.3.0/css/nes.min.css" rel="stylesheet" />
<!-- latest -->
<link href="https://unpkg.com/nes.css@latest/css/nes.min.css" rel="stylesheet" />
<!-- core style only -->
<link href="https://unpkg.com/nes.css/css/nes-core.min.css" rel="stylesheet" />


@section('contenido')
    <h1 class="bg-red-300 text-center">Bienvenido a Heroku-Game</h1>


    <button type="button" class="nes-btn is-primary">Primary</button>
    <button type="button" class="nes-btn is-success">Success</button>
    <button type="button" class="nes-btn is-warning">Warning</button>
    <button type="button" class="nes-btn is-error">Error</button>


    <section class="">
        <!-- Copyright Nintendo -->
        <i class="nes-mario"></i>
        <i class="nes-ash"></i>
        <i class="nes-pokeball"></i>
        <i class="nes-bulbasaur"></i>
        <i class="nes-charmander"></i>
        <i class="nes-squirtle"></i>
        <i class="nes-kirby"></i>
      </section>

@endsection
