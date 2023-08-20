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
        return view('cursos.index');
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function show($curso)
    {
        // compact('curso') es lo mismo que ['curso' => $curso], ya que usamos el mismo nombre de la variable
        // Si la variable se llama diferente, se debe usar el array asociativo, es decir, ['nombre' => $curso]
        // y en la vista se debe llamar a la variable como $nombre
        return view('cursos.show', compact('curso')); 
    }
}
