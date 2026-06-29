@extends('layouts.app')

@section('title', 'Listado de Mascotas')

@section('content')
<div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100">
    
    <!-- Encabezado -->
    <div class="flex justify-between items-center mb-6">
       <h2 class="text-2xl font-bold text-purple-600 tracking-tight">
        <i class="fa-solid fa-paw"></i> Directorio de Mascotas
        </h2>
        <a href="{{ route('pets.create') }}" class="bg-purple-400 hover:bg-purple-750 text-white font-medium px-4 py-2 rounded-xl text-sm transition-colors shadow-sm">
        <i class="fa-solid fa-plus"></i> Registrar Nueva Mascota
        </a>
    </div>

    <!-- Mensaje de exito  -->
    @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    
    <div class="overflow-x-auto rounded-xl border border-gray-100 shadow-sm">
        <table class="w-full text-sm text-left text-gray-500 border-collapse">
            <thead>
                <tr class="bg-purple-50/70 border-b border-gray-200 text-gray-400 text-xs font-semibold uppercase tracking-wider">
                    <th class="px-6 py-4">ID</th>
                    <th class="px-6 py-4">Nombre</th>
                    <th class="px-6 py-4">Especie</th>
                    <th class="px-6 py-4">Edad</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 bg-white">
                @foreach ($pets as $pet)
                    <tr class="hover:bg-gray-50/50 transition-colors">

                        <td class="px-6 py-4 text-gray-650 font-medium">
                            {{ $pet->id }}
                        </td>
                        
                        <td class="px-6 py-4 font-bold text-gray-900">
                            {{ $pet->name }}
                        </td>
                        
                        <td class="px-6 py-4 text-gray-650">
                            {{ $pet->species }}
                        </td>
                        
                        <td class="px-6 py-4 text-gray-650">
                            {{ $pet->age }} {{ $pet->age == 1 ? 'año' : 'años' }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Paginador -->
    <div class="mt-6">
        {{ $pets->links() }}
    </div>

</div>
@endsection