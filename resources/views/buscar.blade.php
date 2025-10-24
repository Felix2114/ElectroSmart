@extends('layouts.base')

@section('titulo', 'Buscar')

@section('contenido')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
@vite(['resources/css/buscar.css', 'resources/js/buscar.js'])

<div class="container mt-4 mb-2">
    <div class="input-group mb-4 shadow-sm">
        <input type="text" class="form-control" placeholder="🔍 Busca aquí tu producto electrónico" aria-label="Buscar producto">
        <button class="btn btn-primary">
            <i class="bi bi-search"></i> Buscar
        </button>
    </div>

    <h2 class="mb-3 text-primary"><i class="bi bi-box-seam"></i> Productos disponibles</h2>

    <div class="row g-4">
    @foreach ([
        ['nombre' => 'Smartphone Galaxy 2131312', 'categoria' => 'Teléfonos', 'desc' => 'Pantalla AMOLED de 6.5", cámara de 108MP y batería de larga duración.', 'precio' => '$9,999.00 MXN', 'img' => 'https://ejemplo.com'],
        ['nombre' => 'Laptop UltraPro 1213215', 'categoria' => 'Computadoras', 'desc' => 'Procesador Intel i7, 16GB RAM y SSD de 512GB.', 'precio' => '$18,499.00 MXN', 'img' => 'https://ejemplo.com'],
        ['nombre' => 'Audífonos SoundMax', 'categoria' => 'Audio', 'desc' => 'Sonido envolvente y cancelación de ruido activa.', 'precio' => '$2,499.00 MXN', 'img' => 'https://ejemplo.com'],
        ['nombre' => 'Smartwatch NeoFit Pro', 'categoria' => 'Accesorios', 'desc' => 'Pantalla táctil, monitoreo de ritmo cardíaco y resistencia al agua.', 'precio' => '$3,299.00 MXN', 'img' => 'https://ejemplo.com'],
        ['nombre' => 'Tablet VisionTab X10', 'categoria' => 'Tablets', 'desc' => 'Pantalla de 10.1", 8GB RAM y almacenamiento de 256GB.', 'precio' => '$7,999.00 MXN', 'img' => 'https://ejemplo.com'],
        ['nombre' => 'Monitor UltraView 27"', 'categoria' => 'Monitores', 'desc' => 'Resolución 4K UHD con tasa de refresco de 144Hz.', 'precio' => '$6,499.00 MXN', 'img' => 'https://ejemplo.com'],
        ['nombre' => 'Teclado Mecánico HyperSwitch', 'categoria' => 'Periféricos', 'desc' => 'Interruptores rojos, retroiluminación RGB y diseño ergonómico.', 'precio' => '$1,899.00 MXN', 'img' => 'https://ejemplo.com'],
        ['nombre' => 'Cámara Lumina S300', 'categoria' => 'Fotografía', 'desc' => 'Sensor de 24MP, grabación 4K y conectividad Wi-Fi.', 'precio' => '$12,999.00 MXN', 'img' => 'hhttps://ejemplo.com'],
        ['nombre' => 'Consola GameStation Z', 'categoria' => 'Videojuegos', 'desc' => 'Procesador de nueva generación y compatibilidad con títulos clásicos.', 'precio' => '$10,499.00 MXN', 'img' => 'https://ejemplo.com'],
    ] as $p)
    <div class="col-md-4">
        <div class="card product-card" 
             data-bs-toggle="modal" 
             data-bs-target="#productoModal"
             data-nombre="{{ $p['nombre'] }}"
             data-categoria="{{ $p['categoria'] }}"
             data-desc="{{ $p['desc'] }}"
             data-precio="{{ $p['precio'] }}"
             data-img="{{ $p['img'] }}">
            <img src="{{ $p['img'] }}" class="card-img-top product-img" alt="{{ $p['nombre'] }}">
            <div class="card-body">
                <h5 class="card-title">{{ $p['nombre'] }}</h5>
                <p class="card-text text-muted mb-1">Categoría: {{ $p['categoria'] }}</p>
                <p class="card-text small">{{ $p['desc'] }}</p>
                <p class="price">{{ $p['precio'] }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

</div>


<div class="modal fade" id="productoModal" tabindex="-1" aria-labelledby="productoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productoModalLabel">Detalle del Producto</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body text-center">
                <img id="modal-img" src="" alt="" class="img-fluid rounded mb-3" style="max-height: 200px;">
                <h5 id="modal-nombre"></h5>
                <p class="text-muted" id="modal-categoria"></p>
                <p id="modal-desc"></p>
                <p class="price fs-5" id="modal-precio"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    <i class="bi bi-x-circle"></i> Cerrar
                </button>
                <button type="button" class="btn btn-success">
                    <i class="bi bi-cart-plus"></i> Agregar al carrito
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
