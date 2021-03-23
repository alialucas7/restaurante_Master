<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blog_controller extends Controller
{

    public function index_block(){
        //con el punto indico las carpetas
        return view('blogs.index_block');
    }
    // Esta funcion va a mostrar el titulo del blog 
    // Dependiendo de cual sea, ver web.php las rutas
    public function mostrarBlogs($blog){
        return view('blogs.mostrarBlogs', compact('blog'));
    }
}
