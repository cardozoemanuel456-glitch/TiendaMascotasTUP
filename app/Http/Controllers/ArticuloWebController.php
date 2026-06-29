<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloWebController extends Controller
{
     public function index()
    {
        $articulos = Articulo::all();

        return view('articulos.index', compact('articulos'));
    }
}
