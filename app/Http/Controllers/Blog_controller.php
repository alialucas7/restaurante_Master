<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blog_controller extends Controller
{

    public function index_block(){
        return view('blogs.index-blog');
    }
    // Esta funcion va a mostrar el titulo del blog 
    // Dependiendo de cual sea, ver web.php las rutas
    public function mostrarBlogs($blog){
        return view('blogs.mostrar-blogs', ['blog' => $blog]);
    }
}
