<h1>Lista de Artículos</h1>

<ul>
    @forelse ($articulos as $articulo)
        <li>
            {{ $articulo->nombre }} -
            ${{ $articulo->precio }}
        </li>
    @empty
        <li>No hay artículos.</li>
    @endforelse
</ul>