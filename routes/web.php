<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home_controller;
use App\Http\Controllers\Blog_controller;


// Ruta principal - el index;)
Route::get('/', Home_controller::class);

//Rutas del blog
Route::get('blogs', [Blog_controller::class, 'index_block']);
//va a mostrar los blogs relacionado al controlador blogcontroller
Route::get('blogs/{blog}', [Blog_controller::class, 'mostrarBlogs']);

//Ruta del Portafolio




//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
