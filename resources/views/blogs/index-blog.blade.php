@extends('layouts.plantilla')
@section('titulo','SOAP') 


@section('contenido')
<div class="text-white">
  
  
  
<?php 
    //Se instancia la clase cliente de SOAP - Primero habilitar libreria
    $client = new SoapClient('http://www.dneonline.com/calculator.asmx?WSDL');

    //Meto los parametros en un arreglo
    $param = array(
    'intA' => '2',
    'intB' => '2',
    );

  //A la variable result le asigno la funcion 
  //que me proporciona el servicio  
  $result = $client->Add($param);
  print_r($result);
  
  

?>
</div>
  
    
  <footer class="bg-blue-300 text-center">Grupo 15</footer>
@endsection
