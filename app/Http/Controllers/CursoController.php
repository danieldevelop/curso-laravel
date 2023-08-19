<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    // como se manjara varias rutas ya no se llama al método __invoke
    // por convención se llama al método:
    // index -> listado de recursos
    // create -> formulario para crear recursos
    // show -> mostrar un recurso

    public function index()
    {
        return "Bienvenido al listado de cursos";
    }

    public function create()
    {
        return "En esta página podras crear un curso";
    }

    public function show($curso)
    {
        return "Bienvenido al curso: $curso";
    }
}
