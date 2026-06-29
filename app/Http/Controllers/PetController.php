<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    // Método para obtener datos y paginarlos 
    public function index() 
    { 
       // 1. Iniciamos el constructor de consultas de Eloquent
        $query = Pet::query();

        // 2. Comprobamos si el usuario ingresó una especie a buscar en el input
        if ($request->has('buscar') && !empty($request->buscar)) {
            $query->where('species', 'LIKE', '%' . $request->buscar . '%');
        }

        // 3. Pagina de a 5 elementos, ordena por los más nuevos y anexa los parámetros de la URL
        $pets = $query->latest()->paginate(5)->appends($request->query());

        // 4. Retornamos la vista compactando la variable corregida
        return view('pets.index', compact('pets')); 
    } 
 
    // Método para mostrar el formulario de creación 
    public function create() 
 
    { 
        return view('pets.create'); 
    } 
 
    // Método para guardar los datos 
    public function store(Request $request) 
    { 
        $request->validate([ 
            'name' => 'required|string|max:255', 
            'species' => 'required|string|max:255', 
            'age' => 'required|integer|min:0', 
        ]); 
 
        Pet::create($request->all()); 
 
        return redirect()->route('pets.index') 
        ->with('success', 'Mascota registrada correctamente.'); 
    } 
}
     
