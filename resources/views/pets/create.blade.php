@extends('layouts.app')

@section('title', 'Registrar Mascota')

@section('content')
<div class="bg-white rounded-xl shadow p-6 max-w-xl mx-auto">
    <h2 class="text-2xl font-bold mb-6 text-slate-800">
        Registrar Nueva Mascota
    </h2>

    <form action="{{ route('pets.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block font-semibold mb-1">Nombre</label>
            <input 
                type="text" 
                name="name" 
                required 
                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-slate-500"
            >
        </div>

        <div>
            <label class="block font-semibold mb-1">Especie</label>
            <input 
                type="text" 
                name="species" 
                required 
                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-slate-500"
            >
        </div>

        <div>
            <label class="block font-semibold mb-1">Edad</label>
            <input 
                type="number" 
                name="age" 
                required 
                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-slate-500"
            >
        </div>

        <div class="flex gap-3 pt-4">
            <button type="submit" class="bg-purple-600 hover:bg-purple-750 text-white font-medium px-6 py-2.5 rounded-xl text-sm transition-colors shadow-sm">
             <i class="fa-solid fa-floppy-disk"></i> Guardar Mascota
            </button>
            <a 
                href="{{ route('pets.index') }}" 
                class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition inline-block text-center"
            >
                Volver
            </a>
        </div>
    </form>
</div>
@endsection