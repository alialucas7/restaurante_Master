<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home_controller extends Controller
{
    //
    public function __invoke(){
    // el metodo view, laravel devuelve lo que 
    // esta dentro de las vistas en la carpeta resources    
    return view('home');

    }
}
