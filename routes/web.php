<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//! El orden de las rutas es importante, ya que si se coloca la ruta de la página 
//! principal al final, no se podrá acceder a las demás rutas.

Route::get('/', function () {
    // return view('welcome');
    return 'Bienvenido a la página principal';
});

Route::get('cursos', function() {
    return "Bienvenido al listado de cursos";
});

Route::get("cursos/create-curso", function() {
    return "En esta página podras crear un curso";
});

Route::get("cursos/{curso}/{categoria?}", function($curso, $categoria = null) {
    if($categoria) {
        return "Bienvenido al curso $curso, de la categoria $categoria";
    } else {
        return "Bienvenido al curso: $curso";
    }
});
