<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // index method
    // como solo manjemos una ruta se llama al método __invoke
    public function __invoke()
    {
        return view('home');
    }
}
