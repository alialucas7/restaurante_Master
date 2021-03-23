<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blog_controller extends Controller
{

    public function index_block(){
        return "Esta es la seccion de blogs";
    }
    // Esta funcion va a mostrar el titulo del blog 
    // Dependiendo de cual sea, ver web.php las rutas
    public function mostrarBlogs($blog){
        return "Blog de $blog";
    }
}
