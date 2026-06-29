<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Mascotas')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    <!-- Encabezado  Menú de navegación -->
    <header class="bg-purple-800 text-white shadow">
        <div class="max-w-5xl mx-auto px-6 py-5 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Sistema de Mascotas</h1>
            <nav class="space-x-4">
                <a href="{{ route('pets.index') }}" class="hover:underline">Listado</a>
                <a href="{{ route('pets.create') }}" class="hover:underline">Nueva Mascota</a>
            </nav>
        </div>
    </header>

 
    <main class="max-w-5xl mx-auto px-6 py-8">
        @yield('content')
    </main>


    <footer class="text-center text-sm text-gray-500 py-6">
        Programación III - Laravel 13
    </footer>

</body>
</html>