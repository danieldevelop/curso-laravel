<?php

use App\Http\Controllers\CursoController; // en la v7 esta linea no es necesaria, desde la v9 es necesaria
use App\Http\Controllers\HomeController; // en la v7 esta linea no es necesaria, desde la v9 es necesaria
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

Route::get('/', HomeController::class);
// antiaguamente se usaba: v7
// Route::get('/', 'HomeController');

Route::get('cursos', [CursoController::class, 'index']);
// antiaguamente se usaba: v7
// Route::get('cursos', 'CursoController@index');

Route::get("cursos/create-curso", [CursoController::class, 'create']);
// antiguamente se usaba: v7
// Route::get("cursos/create-curso", 'CursoController@create');

Route::get("cursos/{curso}", [CursoController::class, 'show']);
// antiguamente se usaba: v7
// Route::get("cursos/{curso}", 'CursoController@show');