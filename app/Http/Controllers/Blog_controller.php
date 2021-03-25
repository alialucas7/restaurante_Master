<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blog_controller extends Controller
{

    public function index_block(){
<<<<<<< HEAD
        return view('blogs.index-blog');
=======
        //con el punto indico las carpetas
        return view('blogs.index_block');
>>>>>>> 52f88ac4aba732ad2410c432e291a7d93b0f5644
    }
    // Esta funcion va a mostrar el titulo del blog 
    // Dependiendo de cual sea, ver web.php las rutas
    public function mostrarBlogs($blog){
<<<<<<< HEAD
        return view('blogs.mostrar-blogs', ['blog' => $blog]);
=======
        return view('blogs.mostrarBlogs', compact('blog'));
>>>>>>> 52f88ac4aba732ad2410c432e291a7d93b0f5644
    }
}
